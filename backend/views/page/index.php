<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\PageSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create page', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            // 'id',
            'name',
            //'slug',
            [
                'attribute' =>'show_page',
                'filter' => Html::activeDropDownList(
                    $searchModel,
                    'show_page',
                    ['0' => 'Can not see','1' => 'It is seen'],
                    ['class' => 'form-control']
                ),
                'format' => 'raw',
                'value' => function($model){
                    $translate = ['0' => 'Can not see','1' => 'It is seen'];
                    return $translate[$model->show_page];
                }
            ],
            ['class' => 'yii\grid\ActionColumn', 'template' => '{update} {delete}'],
        ],
    ]); ?>
</div>
