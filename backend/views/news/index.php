<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Новости';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить новость', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
//            'text:ntext',
          //  'slug',
            ['label' => 'Image', 'content' => function($model){
                return "<img src='".$model -> getImage()->getURL("100x")."'/>";
            } ],
             'date',
            [
                'attribute' =>'status',
                'filter' => Html::activeDropDownList(
                    $searchModel,
                    'status',
                    ['0' => 'Draft','1' => 'Published'],
                    ['class' => 'form-control']
                ),
                'format' => 'raw',
                'value' => function($model){
                    $translate = ['0' => 'Draft','1' => 'Published'];
                    return $translate[$model->status];
                }
            ],

             //'status',

            //['class' => 'yii\grid\ActionColumn'],
            ['class' => 'yii\grid\ActionColumn', 'template' => '{update} {delete}'],
        ],
    ]); ?>
</div>
