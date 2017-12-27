<?php
use yii\helpers\Html;

$this->title = 'Create Photo Category';
$this->params['breadcrumbs'][] = ['label' => 'Photo Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\dvizh\shop\assets\BackendAsset::register($this);
?>
<div class="category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

