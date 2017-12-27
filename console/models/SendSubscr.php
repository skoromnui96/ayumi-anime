<?php
namespace console\models;
use Yii;
use common\models\Video;
use common\models\Subscribe;
use yii\db\ActiveRecord;

class SendSubscr extends ActiveRecord
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

    public function sendSub($email,$post_id){
        $home_url = 'http://ayumi-anime.dev';
        $link = 'video/single?id=';
        $url =  $link.$post_id;
        $post_url = $home_url.'/'.$url;
        $msg = "Hello! You are subscribed to send notifications of new videos on the site $home_url. We inform you that a new video has been posted. For watching go to $post_url";
//        $msg_html  = "<html><body style='font-family:Arial,sans-serif;'>";
//        $msg_html .= "<h3 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Здравствуйте! Вы подписаны на рассылку уведомлений о новых статьях по WEB-программированию на сайте " . $home_url . "</h3>\r\n";
//        $msg_html .= "<p><strong>Сообщаем, что опубликована новая статья. Для просмотра перейдите на </strong><a href='". $post_url ."'>$post_url</a></p>\r\n";
//        $msg_html .= "</body></html>";
        Yii::$app->mailer->compose()
            ->setFrom('alexskoromnui96@yandex.com')
            ->setTo($email)
            ->setSubject("Notification of a new video on the site $home_url.")
            ->setTextBody($msg)
//            ->setHtmlBody($msg_html)
            ->send();
    }
}