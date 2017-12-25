<?php

use dvizh\gallery\widgets\Gallery;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\News */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="news-form">

    <div class="container white" id="w0" style="margin-bottom: 100px">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <div class="col-md-6">
        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-md-6">
        <?= $form->field($model, 'status')->dropDownList([ '0' => 'Disallow', '1' => 'Allow']) ?>
    </div>

    <div class="col-md-12">

        <?= $form->field($model, 'text')->
                widget(Widget::className(), [
                    'settings' => [
                        'lang' => 'ru',
                        'minHeight' => 200,
                        'imageUpload' => Url::to(['/site/image-upload']),
                        'imageManagerJson' => Url::to(['/site/images-get']),
                        'plugins' => [
                            'clips',
                            'fullscreen',
                            'imagemanager',
                        ]
                    ]
                ]);
        ?>

        <div class="col-md-12">
            <?= $form->field($model, 'on_page')->checkbox([ '1' => 'checked', '0' => 'uncheck']) ?>
        </div>

        <div class="col-md-12">
            <?= Gallery::widget(
                [
                    'model' => $model,
                    'fileInputPluginLoading' => true,
                    'fileInputPluginOptions' => []
                ]
            ); ?>

        <?= $form->field($model, 'slug')->textInput(['maxlength' => true])->label(false)->hiddenInput() ?>

        <?= $form->field($model, 'date')->textInput()->label(false)->hiddenInput() ?>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

    </div>
</div>
