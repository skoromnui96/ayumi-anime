<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\Page */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="page-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype'=>'multipart/form-data']]); ?>

    <div class="row">
        <div class="col-xs-12 col-md-4">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'title')->
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
    </div>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'text')->
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
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-12">
            <?= $form->field($model, 'show_page')->checkbox() ?>
        </div>

    </div>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
