<?php
namespace dvizh\cart\widgets;

use yii\helpers\Html;
use yii\helpers\Url;
use yii;
use dvizh\order\models\ShippingType;

class CartInformer1 extends \yii\base\Widget
{

    public $text = NULL;
    public $offerUrl = NULL;
    public $cssClass = NULL;
    public $htmlTag = 'span';
    public $showOldPrice = true;

    public function init()
    {
        parent::init();

        \dvizh\cart\assets\WidgetAsset::register($this->getView());

        if ($this->offerUrl == NULL) {
            $this->offerUrl = Url::toRoute(["/cart/default/index"]);
        }

        if ($this->text === NULL) {
            $this->text = '{p}';
        }

        return true;
    }

    public function run()
    {
        $cart = yii::$app->cart;

        
        if($this->showOldPrice == false | $cart->cost == $cart->getCost(false)) {
            $this->text = str_replace(['{c}', '{p}'],
                [$cart->getCount(), $cart->getCostFormatted()],
                $this->text
            );
        } else {
            $this->text = str_replace(['{c}', '{p}'],
                [$cart->getCount(), round($cart->getCost(false)).$cart->getCostFormatted()],
                $this->text
            );
        }

        return Html::tag($this->htmlTag, $this->text, [
            'href' => $this->offerUrl,
            'class' => "dvizh-cart-informer {$this->cssClass}",
        ]);
    }
}
