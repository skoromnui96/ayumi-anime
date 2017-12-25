<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use dvizh\shop\models\PriceType;

/* @var $this yii\web\View */

/* @var $form yii\widgets\ActiveForm */
?>
<a href="#" class="btn btn-success" data-role="price-from-btn">Добавить <span class="glyphicon glyphicon-plus add-price"></span></a>
<div class="product-add-price-form" data-role="price-form" style="display: none;">

    <?php $form = ActiveForm::begin(['action' => Url::toRoute(['addons/create'])]); ?>


    <?= $form->field($model, 'product_id')->textInput(['type' => 'hidden', 'value' => $productModel->id])->label(false) ?>

    <?= $form->field($model, 'name')->textInput() ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'is_available')->radioList(['yes' => 'Yes','no' => 'No']); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Редактировать', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>