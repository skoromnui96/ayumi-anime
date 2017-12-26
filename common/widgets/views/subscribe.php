<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\widgets\Pjax;
?>
<?= Yii::$app->session->getFlash('success'); ?>
<?= Yii::$app->session->getFlash('error'); ?>
<?php Pjax::begin(['enablePushState' => false, 'id' => 'pjax_form']); ?>
<?php $form = ActiveForm::begin([
    'action' => yii\helpers\Url::to(['site/subscribe']),
    'options' => [
        'data-pjax' => true,
        'class' => 'subscribe-form'
    ],
]); ?>
<?=$form->field($model, 'email')->textInput(['placeholder'=>'Email address...', 'class' => 'none'])->label(false);?>
<?=Html::submitButton('Subscribe'); ?>
<?php ActiveForm::end(); ?>
<?php Pjax::end(); ?>
<div style="clear:both;"></div>
