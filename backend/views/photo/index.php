<?php

use common\models\PhotoCategory;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel common\models\search\PhotoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Photos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="photo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Photo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'date',
            ['label' => 'Image', 'content' => function($model){
                return "<img src='".$model -> getImage()->getURL("100x")."'/>";
            } ],
            [
                'attribute' => 'category_id',
                'filter' => Html::activeDropDownList(
                    $searchModel,
                    'category_id',
                    PhotoCategory::buildTextTree(),
                    ['class' => 'form-control', 'prompt' => 'Photo Category']
                ),
                'value' => 'category.name'
            ],

            ['class' => 'yii\grid\ActionColumn', 'template' => '{update} {delete}'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
