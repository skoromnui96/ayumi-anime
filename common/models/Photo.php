<?php

namespace common\models;

use Yii;
use yii\data\Pagination;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "photo".
 *
 * @property int $id
 * @property string $title
 * @property string $date
 * @property int $views
 * @property int $category_id
 */
class Photo extends ActiveRecord
{
    function behaviors()
    {
        return [
            'images' => [
                'class' => 'dvizh\gallery\behaviors\AttachImages',
            ],
            'toCategory' => [
                'class' => 'voskobovich\manytomany\ManyToManyBehavior',
                'relations' => [
                    'category_ids' => 'categories',
                ],
            ],
            'seo' => [
                'class' => 'dvizh\seo\behaviors\SeoFields',
            ],
        ];
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'photo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['date'], 'date', 'format'=>'php:Y-m-d'],
            [['date'], 'default', 'value'=> date('Y-m-d')],
            [['category_id', 'like'], 'integer'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'date' => 'Date',
            'category_id' => 'Main Category',
        ];
    }

    public static function getAll($pageSize = 9) {
        $query = self::find();
        $count = $query->count();

        $pagination = new Pagination(['totalCount' => $count, 'pageSize' => $pageSize]);

        $photos = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        $data['photos'] = $photos;
        $data['pagination'] = $pagination;

        return $data;
    }

    public function getDate()
    {
        return Yii::$app->formatter->asDate($this->date, 'd.MM.yyyy');
    }


    public function getCategory() {
        return $this->hasOne(PhotoCategory::className(), ['id' => 'category_id']);
    }

    public function getCategories()
    {
        return $this->hasMany(PhotoCategory::className(), ['id' => 'category_id'])
            ->viaTable('{{%photo_to_photo_category}}', ['product_id' => 'id']);
    }

}
