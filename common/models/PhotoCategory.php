<?php

namespace common\models;

use dvizh\shop\models\category\CategoryQuery;
use Yii;
use yii\data\Pagination;
use yii\helpers\Url;

/**
 * This is the model class for table "photo_category".
 *
 * @property int $id
 * @property string $title
 */
class PhotoCategory extends \yii\db\ActiveRecord
{
    function behaviors()
    {
        return [
            'images' => [
                'class' => 'dvizh\gallery\behaviors\AttachImages',
                'mode' => 'single',
            ],
            'slug' => [
                'class' => 'Zelenin\yii\behaviors\Slug',
            ],
            'seo' => [
                'class' => 'dvizh\seo\behaviors\SeoFields',
            ],
            'field' => [
                'class' => 'dvizh\field\behaviors\AttachFields',
            ],
        ];
    }

    public static function tableName()
    {
        return '{{%photo_category}}';
    }

    static function find()
    {
        return new CategoryQuery(get_called_class());
    }

    public function rules()
    {
        return [
            [['parent_id', 'sort'], 'integer'],
            [['name'], 'required'],
            [['text', 'code'], 'string'],
            [['name', 'code', 'slug'], 'string', 'max' => 55],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Main category',
            'name' => 'Category name',
            'slug' => 'Seo title',
            'text' => 'Text',
            'image' => 'Image',
            'sort' => 'Sort',
            'description' => 'Description',
        ];
    }

    public static function buildTree($parent_id = null)
    {
        $return = [];

        if(empty($parent_id)) {
            $categories = self::find()->where('parent_id = 0 OR parent_id is null')->orderBy('sort DESC')->asArray()->all();
        } else {
            $categories = self::find()->where(['parent_id' => $parent_id])->orderBy('sort DESC')->asArray()->all();
        }

        foreach($categories as $level1) {
            $return[$level1['id']] = $level1;
            $return[$level1['id']]['childs'] = self::buildTree($level1['id']);
        }

        return $return;
    }

    public static function buildTextTree($id = null, $level = 1, $ban = [])
    {
        $return = [];

        $prefix = str_repeat('--', $level);
        $level++;

        if(empty($id)) {
            $categories = self::find()->where('parent_id = 0 OR parent_id is null')->orderBy('sort DESC')->asArray()->all();
        } else {
            $categories = self::find()->where(['parent_id' => $id])->orderBy('sort DESC')->asArray()->all();
        }

        foreach($categories as $category) {
            if(!in_array($category['id'], $ban)) {
                $return[$category['id']] = "$prefix {$category['name']}";
                $return = $return + self::buildTextTree($category['id'], $level, $ban);
            }
        }

        return $return;
    }

    public function getProducts()
    {
        return $this->hasMany(Photo::className(), ['id' => 'product_id'])
            ->viaTable('{{%photo_to_photo_category}}', ['category_id' => 'id'])->available();
    }

    public function getChilds()
    {
        return $this->hasMany(self::className(), ['parent_id' => 'id']);
    }

    public function getParent()
    {
        return $this->hasOne(self::className(), ['id' => 'parent_id']);
    }

    public static function getArticlesByCategory($id)
    {
        // build a DB query to get all articles
        $query = Photo::find()->where(['category_id'=>$id]);

        // get the total number of articles (but do not fetch the article data yet)
        $count = $query->count();

        // create a pagination object with the total count
        $pagination = new Pagination(['totalCount' => $count, 'pageSize'=>9]);

        // limit the query using the pagination and retrieve the articles
        $photos = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        $data['photos'] = $photos;
        $data['pagination'] = $pagination;

        return $data;
    }

    public static function getAll()
    {
        return PhotoCategory::find()->all();
    }

}
