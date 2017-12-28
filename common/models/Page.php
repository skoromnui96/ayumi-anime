<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

class Page extends ActiveRecord
{
    public function behaviors()
    {
        return [
            'slug' => [
                'class' => 'Zelenin\yii\behaviors\Slug',
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'name', 'text', 'name'], 'required'],
            [['text', 'title'], 'string'],
            [['show_page'], 'integer'],
            [['slug', 'name'], 'string','max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'show_page' => 'Show in the main menu',
            'slug' => 'SEO name',
            'name' => 'Menu name',
            'text' => 'Text',
            'title' => 'Title'
        ];
    }

    public static function getPages()
    {
        return self::find()->where(['show_page' => 1])->all();
    }

    public static function findModelBySlug($slug)
    {
        if (($model = Page::findOne(['slug' => $slug])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException();
        }
    }
}
