<?php

use dvizh\gallery\widgets\Gallery;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TopVideos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="top-videos-form">

    <div class="container white" id="w0">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <div class="col-md-6">
        <?= $form->field($model, 'status')->dropDownList([ '0' => 'Disallow', '1' => 'Allow']) ?>
    </div>

    <div class="col-md-6">
        <?= $form->field($model, 'link')->textInput() ?>
    </div>

    <div class="col-md-12">
        <?= Gallery::widget(
            [
                'model' => $model,
                'fileInputPluginLoading' => true,
                'fileInputPluginOptions' => []
            ]
        ); ?>

        <br />

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
