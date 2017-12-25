<?php

namespace common\models;

use Yii;
use yii\data\Pagination;

class News extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return [
            'slug' => [
                'class' => 'Zelenin\yii\behaviors\Slug',
            ],
            'images' => [
                'class' => 'dvizh\gallery\behaviors\AttachImages',
                'mode' => 'gallery',
                'quality' => 60,
                'galleryId' => 'picture'
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'text'], 'required'],
            [['text', 'status'], 'string'],
            [['date'], 'date', 'format'=>'php:Y-m-d'],
            [['date'], 'default', 'value'=> date('Y-m-d')],
            [['name', 'slug'], 'string', 'max' => 55],
            [['status', 'views', 'on_page'], 'integer'],
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
            'text' => 'text',
            'slug' => 'Seo-title',
            'date' => 'Date',
            'status' => 'Status',
            'on_page' => 'Top Stories',
        ];
    }

    public static function getAll($pageSize = 8) {
        $query = self::find();
        $count = $query->count();

        $pagination = new Pagination(['totalCount' => $count, 'pageSize' => $pageSize]);

        $news = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->where(['status'=>1])
            ->all();

        $data['news'] = $news;
        $data['pagination'] = $pagination;

        return $data;
    }

    public function getDate()
    {
        return Yii::$app->formatter->asDate($this->date);
    }
    public function viewedCounter()
    {
        $this->views += 1;
        return $this->save(false);
    }

    public function allow() {
        $this->status = 1;
        return $this->save(false);
    }

    public function disallow() {
        $this->status = 0;
        return $this->save(false);
    }

    public function stories() {
        $this->on_page = 1;
        return $this->save(false);
    }

    public function none_stories() {
        $this->on_page = 0;
        return $this->save(false);
    }

    public static function getStories() {
        $stories = self::find()->where(['on_page'=>1])->all();
        return $stories;
    }

    public static function getPosts()
    {
        return self::find()->orderBy('views desc')->limit(4)->all();
    }
}
