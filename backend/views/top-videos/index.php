<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\TopVideosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Top Videos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="top-videos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Top Videos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'link',
            ['label' => 'Image', 'content' => function($model){
                return "<img src='".$model -> getImage()->getURL("100x")."'/>";
            } ],
            [
                'attribute' =>'status',
                'filter' => Html::activeDropDownList(
                    $searchModel,
                    'status',
                    ['0' => 'Disallow','1' => 'Allow'],
                    ['class' => 'form-control']
                ),
                'format' => 'raw',
                'value' => function($model){
                    $translate = ['0' => 'Disallow','1' => 'Allow'];
                    return $translate[$model->status];
                }
            ],

            ['class' => 'yii\grid\ActionColumn', 'template' => '{update} {delete}'],
        ],
    ]); ?>
</div>

