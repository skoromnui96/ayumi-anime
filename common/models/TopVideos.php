<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "top_videos".
 *
 * @property int $id
 * @property int $sort
 * @property int $status
 */
class TopVideos extends ActiveRecord
{
    function behaviors()
    {
        return [
            'images' => [
                'class' => 'dvizh\gallery\behaviors\AttachImages',
            ],
        ];
    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'top_videos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['link'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status' => 'Status',
            'link' => 'Link'
        ];
    }

    public static function getTopVideos() {
        $topVideos = self::find()->where(['status'=>1])->all();
        return $topVideos;
    }
}
