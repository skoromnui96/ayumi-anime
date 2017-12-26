<?php
namespace common\models;
use Yii;
use yii\db\ActiveRecord;

class Subscribe extends ActiveRecord{
    public static function tableName()
    {
        return '{{%subscribe}}';
    }
    public function rules(){
        return [
            [['email'], 'required'],
            [['email'], 'email'],
            [['email'], 'trim'],
            [['email'], 'unique', 'message' => 'Email already exist'],
            [['email', 'addtime'], 'string', 'max' => 255],
        ];
    }
    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'email' => 'Email',
            'addtime' => 'Time added',
        ];
    }
}