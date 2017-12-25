<?php
use yii\helpers\Html;
use yii\helpers\Url;
use dvizh\cart\widgets\ChangeCount;
use dvizh\cart\widgets\DeleteButton;
use dvizh\cart\widgets\ElementPrice;
use dvizh\cart\widgets\ElementCost;
use dvizh\field\widgets\Show;
use dvizh\cart\widgets\ElementsList;


?>
<article class="item-list clearfix">
    <?php if (isset($image)) {?>
        <div class="col-md-3 col-sm-5 col-xs-6">
            <div class="img-wrapper">
                <a href="<?=Url::toRoute(['/video/single', 'id' => $product_id]);?>"><img src="<?=$image?>" alt="" class="img-responsive">
                    <span class="play-icon" id="play-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></span>
                </a>
            </div>
        </div>
    <?php }?>
    <div class="col-md-9 col-sm-7 col-xs-6">
        <h4 class="title">
            <a href="<?=Url::toRoute(['/video/single', 'id' => $product_id]);?>"><?= $name ?></a>
            <?= ChangeCount::widget([
                'model' => $model,
                'showArrows' => $showCountArrows,
                'actionUpdateUrl' => $controllerActions['update'],
            ]); ?>
            <span class="price">$<?= ElementPrice::widget(['model' => $model]); ?></span>
            <button class="delete"><?= Html::tag('div', DeleteButton::widget([
                    'model' => $model,
                    'deleteElementUrl' => $controllerActions['delete'],
                    'lineSelector' => 'dvizh-cart-row ',
                    'cssClass' => 'delete']),
                    ['class' => 'shop-cart-delete col-xs-1']);
                ?></button>

        </h4>

        <?php if (isset($otherField)){ ?>
            <div class="item-description">
                <?=$otherField?>
            </div>
        <?php }?>

    </div>

</article>
