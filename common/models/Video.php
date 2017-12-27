<?php

namespace common\models;

use common\models\VideoUpload;
use console\models\SendSubscr;
use dvizh\cart\interfaces\CartElement;
use maxmirazh33\file\Behavior;
use Yii;
use yii\data\Pagination;
use yii\db\ActiveRecord;
/**
 * This is the model class for table "video".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $main_text
 * @property int $views
 * @property int $like
 * @property int $unlike
 * @property int $category_id
 * @property double $price
 * @property double $old_price
 */
class Video extends ActiveRecord implements CartElement
{

    public function behaviors()
    {
        return [
            'images' => [
                'class' => 'dvizh\gallery\behaviors\AttachImages',
            ],
            //other behaviors
        ];
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'video';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['main_text'], 'string'],
            [['views', 'like', 'unlike', 'category_id'], 'integer'],
            [['price', 'old_price'], 'number'],
            [['video'], 'file'],
            [['date'], 'date', 'format'=>'php:Y-m-d'],
            [['date'], 'default', 'value'=> date('Y-m-d')],
            [['name', 'description',], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Title',
            'description' => 'Description',
            'main_text' => 'Main Text',
            'views' => 'Views',
            'like' => 'Like',
            'unlike' => 'Unlike',
            'category_id' => 'Category ID',
            'price' => 'Price',
            'old_price' => 'Old Price',
            'file' => 'Main Video',
        ];
    }

    public function saveVideo($filename) {
        $this->video = $filename;
        $this->save(false);
    }

    public function getVideo() {
        return ($this->video) ? '/videos/' . $this->video: '/no-video.png';
    }

    public function deleteVideo() {
        $videoUploadModel = new VideoUpload();
        $videoUploadModel->deleteCurrentVideo($this->video);
    }

    public function beforeDelete()
    {
        $this->deleteVideo();
        return parent::beforeDelete(); // TODO: Change the autogenerated stub
    }

    public static function getAll($pageSize = 6) {
        $query = Video::find();
        $count = $query->count();

        $pagination = new Pagination(['totalCount' => $count, 'pageSize' => $pageSize]);

        $video = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        $data['video'] = $video;
        $data['pagination'] = $pagination;

        return $data;
    }

    public static function getSearch($pageSize = 6) {
        $search = Yii::$app->request->get('search');
        $query = Video::find()->where(['like', 'name', $search])->orWhere(['like', 'description', $search]);
        $count = $query->count();

        $pagination = new Pagination(['totalCount' => $count, 'pageSize' => $pageSize]);

        $video = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        $data['video'] = $video;
        $data['pagination'] = $pagination;

        return $data;
    }

    public function viewedCounter()
    {
        $this->views += 1;
        return $this->save(false);
    }

    public static function getRelated() {
        return self::find()->orderBy('id desc')->limit(3)->offset(1)->all();
    }
    public function getCartId()
    {
        return $this->id;
    }
    public function getCartName()
    {
        return $this->name;
    }
    public function getCartPrice()
    {
        return $this->price;
    }
    public function getCartOptions()
    {
        return '';
    }
    public function getProduct()
    {
        return $this;
    }

    public function getDate() {
        return Yii::$app->formatter->asDate($this->date, 'd.MM.yyyy');
    }

    public static function getLatestVideos() {
        return self::find()->orderBy('id desc')->limit(3)->all();
    }

    public static function getPopularVideos() {
        return self::find()->orderBy('views desc')->limit(3)->all();
    }
}
