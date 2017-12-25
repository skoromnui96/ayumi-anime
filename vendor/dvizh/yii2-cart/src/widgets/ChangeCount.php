<?php
namespace dvizh\cart\widgets;

use yii\helpers\Url;
use yii\helpers\Html;

class ChangeCount extends \yii\base\Widget
{
    public $model = NULL;
    public $lineSelector = 'li'; //Селектор материнского элемента, где выводится элемент
    public $downArr = '-';
    public $upArr = '+';
    public $cssClass = 'counter';
    public $defaultValue = 1;
    public $showArrows = true;
    public $actionUpdateUrl = '/cart/element/update';
    public $customView = false; // for example '@frontend/views/custom/changeCountLayout'

    public function init()
    {
        parent::init();

        \dvizh\cart\assets\WidgetAsset::register($this->getView());

        return true;
    }
//<div class="counter">
//<button type="button" class="but counterBut dec">-</button>
//<input type="text" class="field fieldCount" value="1" data-min="1" data-max="1000">
//<button type="button" class="but counterBut inc">+</button>
//</div>
    public function run()
    {
        if($this->showArrows) {
            $downArr = Html::a($this->downArr, '#', ['class' => 'dvizh-arr dvizh-downArr but counterBut dec']);
            $upArr = Html::a($this->upArr, '#', ['class' => 'dvizh-arr dvizh-upArr but counterBut inc']);
        } else {
            $downArr = $upArr = '';
        }

        if(!$this->model instanceof \dvizh\cart\interfaces\CartElement) {
            $input = Html::activeTextInput($this->model, 'count', [
                'type' => 'number',
                'class' => 'dvizh-cart-element-count',
                'data-role' => 'cart-element-count',
                'data-min' => 1,
                'data-max' => 1000,
                'data-line-selector' => $this->lineSelector,
                'data-id' => $this->model->getId(),
                'data-href' => Url::toRoute($this->actionUpdateUrl),
//                'type' => 'number',
//                'class' => 'dvizh-cart-element-count',
//                'data-role' => 'cart-element-count',
//                'data-line-selector' => $this->lineSelector,
//                'data-id' => $this->model->getId(),
//                'data-href' => Url::toRoute($this->actionUpdateUrl),
            ]);
        } else {
            $input = Html::input('number', 'count', $this->defaultValue, [
                'class' => 'field fieldCount',
                'data-line-selector' => $this->lineSelector,
                'data-id' => $this->model->getCartId(),
            ]);
        }

        if ($this->customView) {
            return $this->render($this->customView, [
                'model' => $this->model,
                'defaultValue' => $this->defaultValue,
            ]);
        } else {
            return Html::tag('div', $downArr.$input.$upArr, ['class' => $this->cssClass]);
        }
    }
}
//
//    public $model = NULL;
//    public $lineSelector = 'li'; //Селектор материнского элемента, где выводится элемент
//    public $downArr = '⟨';
//    public $upArr = '⟩';
//    public $cssClass = 'dvizh-change-count';
//    public $defaultValue = 1;
//    public $showArrows = true;
//    public $actionUpdateUrl = '/cart/element/update';
//    public $customView = false; // for example '@frontend/views/custom/changeCountLayout'
//
//    public function init()
//    {
//        parent::init();
//
//        \dvizh\cart\assets\WidgetAsset::register($this->getView());
//
//        return true;
//    }
//
//    public function run()
//    {
//        if($this->showArrows) {
//            $downArr = Html::a($this->downArr, '#', ['class' => 'dvizh-arr dvizh-downArr']);
//            $upArr = Html::a($this->upArr, '#', ['class' => 'dvizh-arr dvizh-upArr']);
//        } else {
//            $downArr = $upArr = '';
//        }
//
//        if(!$this->model instanceof \dvizh\cart\interfaces\CartElement) {
//            $input = Html::activeTextInput($this->model, 'count', [
//                'type' => 'number',
//                'class' => 'dvizh-cart-element-count',
//                'data-role' => 'cart-element-count',
//                'data-line-selector' => $this->lineSelector,
//                'data-id' => $this->model->getId(),
//                'data-href' => Url::toRoute($this->actionUpdateUrl),
//            ]);
//        } else {
//            $input = Html::input('number', 'count', $this->defaultValue, [
//                'class' => 'dvizh-cart-element-before-count',
//                'data-line-selector' => $this->lineSelector,
//                'data-id' => $this->model->getCartId(),
//            ]);
//        }
//
//        if ($this->customView) {
//            return $this->render($this->customView, [
//                'model' => $this->model,
//                'defaultValue' => $this->defaultValue,
//            ]);
//        } else {
//            return Html::tag('div', $downArr.$input.$upArr, ['class' => $this->cssClass]);
//        }
