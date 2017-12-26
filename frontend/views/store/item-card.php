<?php
use yii\helpers\Url;
use dvizh\shop\models\Category;
use dvizh\cart\widgets\CartInformer;
use dvizh\cart\widgets\BuyButton;
use dvizh\cart\widgets\BuyButton1;
use dvizh\cart\widgets\ChangeOptions;
use dvizh\shop\widgets\ShowPrice;
use dvizh\field\widgets\Show;




/* @var $this yii\web\View */

$this->title = 'Shop'. ': ' . $product->name;
$this->params['breadcrumbs'][] = ['label' => 'Shop', 'url' => ['card-view']];
$this->params['breadcrumbs'][] = ['label' => $product->name,  $product->id];

?>

<section class="s-item-card">
    <div class="container">
        <article class="single-item">
            <div class="row">
                <div class="col-md-4 col-sm-5">
                    <div class="image-wrapper">
                        <?php foreach ($product->getImages() as $image){?>
                        <a href="#">
                            <img src="<?=$image->getUrl();?>" alt="<?=$product->name;?>" class="img-responsive">
                        </a>
                        <?php }
                        ?>
                    </div>
                </div>
                <div class="col-md-8 col-sm-7">
                    <form action="#">
                        <div class="item-count">
                            <a href="<?=Url::toRoute(['/store/order-step1']);?>" class="cart-button"><i class="fa fa-shopping-basket" aria-hidden="true"></i> <?= CartInformer::widget(['htmlTag' => 'span', 'offerUrl' => '/?r=cart', 'text' => '{c} items']); ?></a>
                        </div>
                        <div class="item-description">
                            <h4 class="title"><?=$product->name?> <span class="price">$<?=$product->price?></span></h4>
                            <ul class="properties clearfix">
                                <?=Show::widget(['model' => $product]);?>
                            </ul>
                            <h5>Add-on:</h5>
                            <ul class="add-on filter">
                                <?php foreach ($addons as $addon) { ?>
                                <li><input id="b<?=$addon->id?>" onclick="myFunc ()" type="checkbox" name="" value="" /><label for="b<?=$addon->id?>"><?=$addon->name?><span class="price"><?=$addon->price?>$</span></label></li>
                                <span hidden id="s<?=$addon->id?>"><?=$addon->price?></span>
                                    <?= BuyButton1::widget(['model' => $addon]) ?>
                                <?php }?>
                            </ul>
                            <div class="total">
                                <h5>Total: <span class="total-count" id="r" name="sum"><?= $product->getPrice()?> </span></h5>
                            </div>
                            <?=BuyButton::widget(['model' => $product])?>
                        </div>
                    </form>
                </div>
            </div>
        </article>
    </div>
</section>
<section class="s-shop top-sales">
    <div class="container">
        <div class="section-title">
            <h4>you might like it </h4>
            <h2>TOP Sales</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
        </div>
        <div class="row">
            <div class="shop">
                <?php foreach($top_sales as $sale) { ?>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <article class="item-card clearfix">
                        <div class="img-wrapper">
                            <a href="<?=Url::toRoute(['/store/item-card', 'id' => $sale->id]);?>"> <img src="<?=$sale->getImage()->getUrl('300x300');?>" alt="<?=$sale->name;?>" class="img-responsive"></a>
                            <div class="item-description">
                                <ul class="properties">
                                    <?=Show::widget(['model' => $sale]);?>
                                    <li>Worn in: <span><a href="#">YOUR PERSONAL ASIAN TRAINER</a></span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="purchase">
                            <h4 class="title">
                                <a href="<?=Url::toRoute(['/store/item-card', 'id' => $sale->id]);?>"><?=$sale->name?></a>
                                <span class="price">$<?=$sale->price?></span>
                            </h4>
                            <?=BuyButton::widget(['model' => $sale]);?>
                        </div>
                    </article>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</section>
<script>
    function myFunc ()
    {
        var rez = <?=$product->getPrice()?>; with (document)
    {
        <?php foreach ($addons as $addon) { ?>
        if (getElementById ('b<?=$addon->id?>').checked) rez += parseFloat (getElementById ('s<?=$addon->id?>').innerHTML);
        <?php }?>
        getElementById ('r').innerHTML = '$' + rez;
    }
    }
</script>
