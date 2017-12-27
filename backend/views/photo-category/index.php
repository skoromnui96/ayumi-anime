<?php

use common\models\PhotoCategory;
use dvizh\shop\assets\BackendAsset;
use dvizh\tree\widgets\Tree;
use kartik\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;
use kartik\export\ExportMenu;

$this->title = 'Photo Category';
$this->params['breadcrumbs'][] = ['label' => 'Photo', 'url' => ['/shop/default/index']];
$this->params['breadcrumbs'][] = $this->title;

BackendAsset::register($this);
?>
<div class="category-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
        <div class="col-md-2">
            <?= Html::a('Create Photo Category', ['create'], ['class' => 'btn btn-success']) ?>
        </div>
        <div class="col-md-4">
            <?php
            $gridColumns = [
                'id',
                'name',
            ];

            echo ExportMenu::widget([
                'dataProvider' => $dataProvider,
                'columns' => $gridColumns
            ]);
            ?>
        </div>
    </div>

    <br style="clear: both;"></div>

<ul class="nav nav-pills">
    <li role="presentation" <?php if(yii::$app->request->get('view') == 'list') echo ' class="active"'; ?>><a href="<?=Url::toRoute(['photo-category/index', 'view' => 'list']);?>">List</a></li>
</ul>

<br style="clear: both;">
<?php
if(yii::$app->request->get('view') == 'list') {
    $categories = GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => '\kartik\grid\CheckboxColumn'],
            ['class' => 'yii\grid\SerialColumn'],
            ['attribute' => 'id', 'filter' => false, 'options' => ['style' => 'width: 55px;']],
            'name',
            [
                'attribute' => 'image',
                'format' => 'image',
                'filter' => false,
                'content' => function ($image) {
                    if($image = $image->getImage()->getUrl('50x50')) {
                        return "<img src=\"{$image}\" class=\"thumb\" />";
                    }
                }
            ],
            [
                'attribute' => 'parent_id',
                'filter' => Html::activeDropDownList(
                    $searchModel,
                    'parent_id',
                    PhotoCategory::buildTextTree(),
                    ['class' => 'form-control', 'prompt' => 'Category']
                ),
                'value' => 'parent.name'
            ],
            ['class' => 'yii\grid\ActionColumn', 'template' => '{update} {delete}']
        ],
    ]);
} else {
    $categories = Tree::widget();
}

echo $categories;
?>

</div>
