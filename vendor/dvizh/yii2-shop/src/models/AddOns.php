<?php

namespace dvizh\shop\models;

use dvizh\cart\interfaces\CartElement;
use Yii;

/**
 * This is the model class for table "add_ons".
 *
 * @property int $id
 * @property string $name
 * @property int $product_id
 * @property int $price
 * @property int $is_available
 */
class AddOns extends \yii\db\ActiveRecord implements CartElement
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'add_ons';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['product_id', 'price'], 'integer'],
            [['name', 'is_available'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'product_id' => 'Product ID',
            'price' => 'Price',
            'is_available' => 'Is Available',
        ];
    }

    public static function editField($id, $name, $value)
    {
        $setting = AddOns::findOne($id);
        $setting->$name = $value;
        $setting->save();
    }

    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }

    public function getId()
    {
        return $this->id;
    }

    public function minusAmount($count)
    {
        $this->amount = $this->amount - $count;

        return $this->save(false);
    }

    public function plusAmount($count)
    {
        $this->amount = $this->amount + $count;

        return $this->save(false);
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
    public function getImage()
    {
        return '';
    }


}
