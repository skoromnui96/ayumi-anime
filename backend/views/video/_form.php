<?php

use dvizh\gallery\widgets\Gallery;
use vova07\imperavi\Widget;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Video */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="video-form">
    <div class="container white" id="w0" style="margin-bottom: 100px">
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <div class="col-md-6">
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-md-12">
            <?= $form->field($model, 'description')->
            widget(Widget::className(), [
                'settings' => [
                    'lang' => 'en',
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
    </div>

    <div class="col-md-12">
        <?= $form->field($model, 'main_text')->
        widget(Widget::className(), [
            'settings' => [
                'lang' => 'en',
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
    </div>

    <div class="col-md-6">
    <?= $form->field($model, 'price')->textInput() ?>
    </div>

    <div class="col-md-6">
    <?= $form->field($model, 'old_price')->textInput() ?>
    </div>

    <div class="col-md-6">
        <?= $form->field($video, 'video')->fileInput() ?>
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
