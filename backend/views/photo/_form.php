<?php

use common\models\PhotoCategory;
use dvizh\gallery\widgets\Gallery;
use kartik\select2\Select2;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Photo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="photo-form">

    <div class="container white" id="w0" style="margin-bottom: 100px">

        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

        <div class="col-md-6">
            <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-lg-6 col-xs-6">
            <?= $form->field($model, 'category_id')
                ->widget(Select2::classname(), [
                    'data' => PhotoCategory::buildTextTree(),
                    'language' => 'ru',
                    'options' => ['placeholder' => 'Select category ...'],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]); ?>

        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'category_ids')
                ->label('Other Categories')
                ->widget(Select2::classname(), [
                    'data' => PhotoCategory::buildTextTree(),
                    'language' => 'ru',
                    'options' => ['multiple' => true, 'placeholder' => 'Select other categories ...'],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ]); ?>
        </div>

        <div class="col-md-12">
            <?= Gallery::widget(
                [
                    'model' => $model,
                    'fileInputPluginLoading' => true,
                    'fileInputPluginOptions' => []
                ]
            ); ?>

            <br>

            <div class="form-group">
                <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
            <?php ActiveForm::end(); ?>
    </div>

</div>
