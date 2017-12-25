<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TopVideos */

$this->title = 'Update Top Videos: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Top Videos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="top-videos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
