<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "top_videos".
 *
 * @property int $id
 * @property int $sort
 * @property int $status
 */
class TopVideos extends \yii\db\ActiveRecord
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
        ];
    }

    public static function getTopVideos() {
        $topVideos = self::find()->where(['status'=>1])->all();
        return $topVideos;
    }

    public function allow() {
        $this->status = 1;
        return $this->save(false);
    }

    public function disallow() {
        $this->status = 0;
        return $this->save(false);
    }
}
