<?php

use dvizh\field\widgets\Choice;
use dvizh\shop\assets\BackendAsset;
use yii\helpers\Html;

$this->title = 'Update Photo Category ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Photo Category', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Update';
BackendAsset::register($this);
?>
<div class="category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

    <?php if($fieldPanel = Choice::widget(['model' => $model])) { ?>
        <div class="block">
            <h2>Other</h2>
            <?=$fieldPanel;?>
        </div>
    <?php } ?>

</div>
