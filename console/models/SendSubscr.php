<?php
namespace console\models;
use Yii;
use common\models\Video;
use common\models\Subscribe;

class SendSubscr extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return '{{%send_subscr}}';
    }
    public function rules()
    {
        return [
            [['video_id', 'subscriber_id'], 'required'],
            [['video_id', 'subscriber_id'], 'integer'],
            [['end'],'boolean'],
        ];
    }
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'video_id' => 'Post ID',
            'subscriber_id' => 'Subscriber ID',
            'end' => 'End',
        ];
    }

    public function send(){
        //В таблице send_subscr выбираем строку с самым большим id поста (последний пост по которому была рассылка)
        $query = $this->find()
            ->limit(1)
            ->orderBy('video_id DESC')
            ->all();
        $last_subscribe = $query[0];

        if ($last_subscribe->end == 1 or count($last_subscribe) == 0) {
            $last_post = $last_subscribe->video_id or $last_post = 0;
            $post = Video::find()
                ->limit(1)
                ->where(['>', 'id', $last_post])
                ->all();
            if (!$post) exit;
            $this->video_id = $post[0]->id;
            $this->subscriber_id = 0;
            $this->end = 0;
            $this->save();
            exit;
        }

        $last_id = $last_subscribe->subscriber_id;

        $subscriptions = Subscribe::find()
            ->where(['>', 'id', $last_id])
            ->all();
        $max_count = count($subscriptions);

        if ($max_count > 10) $max_count = 10;

        foreach ($subscriptions as $key => $sub){
            $subscriber_id = $sub->id;

            $this->sendSub($sub->email, $last_subscribe->video_id);
            if ($key >= ($max_count-1)) {
                $send_subscr = self::findOne($last_subscribe->id);
                $send_subscr->subscriber_id = $subscriber_id;
                $send_subscr->update();
                break;
            }
        }
        if(count($subscriptions) <= $max_count)    {
            $send_subscr = self::findOne($last_subscribe->id);
            $send_subscr->end = 1;
            $send_subscr->update();
        }
    }

    public function sendSub($email,$video_id){
        $home_url = 'http://ayumi-anime.com';
        $link = 'video/single?id=';
        $full_link = $link.$video_id;
        $url = $full_link;
        $post_url = $home_url.'/'.$url;
        $msg_html  = "<html><body style='font-family:Arial,sans-serif;'>";
        $msg_html .= "<h3 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Hello! You are subscribed to receive notifications of new videos on the site " . $home_url . "</h3>\r\n";
        $msg_html .= "<p><strong>We are reporting that a new video has been released. To view it go to </strong><a href='". $post_url ."'>$post_url</a></p>\r\n";
        $msg_html .= "</body></html>";
        Yii::$app->mailer->compose()
            ->setFrom('alexskoromnui96@yandex.com')
            ->setTo($email)
            ->setSubject('Notification of a new video')
            ->setHtmlBody($msg_html)
            ->send();
    }
}