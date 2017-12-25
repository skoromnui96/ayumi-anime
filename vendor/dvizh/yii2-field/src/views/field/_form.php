<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use dvizh\field\models\Category;
?>

<div class="field-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-lg-6">
            <?= $form->field($model, 'category_id')->dropdownList(ArrayHelper::map(Category::find()->all(), 'id', 'name')) ?>
            <?= $form->field($model, 'name')->textInput() ?>
            <?= $form->field($model, 'slug')->textInput() ?>
        </div>
        <div class="col-lg-6">
            <?= $form->field($model, 'relation_model')->dropdownList(yii::$app->getModule('field')->relationModels) ?>
            <?= $form->field($model, 'type')->dropdownList(Yii::$app->getModule('field')->types) ?>
            <?= $form->field($model, 'description')->textArea(['maxlength' => true]) ?>
            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
