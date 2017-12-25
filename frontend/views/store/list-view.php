<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;
use dvizh\shop\models\Category;
use dvizh\filter\widgets\FilterPanel;
use dvizh\cart\widgets\CartInformer;
use dvizh\cart\widgets\BuyButton;
use dvizh\field\widgets\Show;
use backend\widgets\customService;



/* @var $this yii\web\View */

$this->title = 'List View';

?>
<section class="s-shop">
    <div class="container">
        <div class="user-panel">
            <div class="row">
                <div class="col-md-5 col-sm-4 col-xs-12">
                    <div class="section-title">
                        <h4>auymi anime like it</h4>
                        <h2>Store</h2>
                    </div>
                </div>
                <div class="col-md-7 col-sm-8 col-sm-12">
                    <div class="col-md-4 col-sm-4 col-xs-4 no-padding">
                        <ul class="view btn-panel">
                            <li> <a href="<?=Url::toRoute(['store/card-view']);?>"><i class="fa fa-th-large" aria-hidden="true"></i></a></li>
                            <li> <a href="<?=Url::toRoute(['store/list-view']);?>" class="select"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-5 no-padding">
                        <div class="sort">
                            <div class="dropdown-wrapper">
                                <span>Sort by:</span>
                                <div class="dropdown categories">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                        ----
                                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li> <a href="<?=Url::toRoute(['store/list-view-desc']);?>"  class="select">Старые</a></li>
                                        <li> <a href="<?=Url::toRoute(['store/list-view']);?>"  class="select">Новые</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3 no-padding">
                        <a href="<?=Url::toRoute(['/store/order-step1']);?>" class="cart-button"><i class="fa fa-shopping-basket" aria-hidden="true"></i> <?= CartInformer::widget(['htmlTag' => 'span', 'offerUrl' => '/?r=cart', 'text' => '{c} items']); ?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="shop">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="sidebar">
                        <h3 class="line">Categories</h3>
                        <div class="filter">
                            <div class="cat-content">
                                <?php foreach($categories as $cat) { ?>
                                    <input type="checkbox" id="s-<?=$cat->id?>" <?php if($cat->id == $category->id) echo 'checked';?>>
                                    <label for="s-<?=$cat->id?>">
                                        <a href="<?=Url::toRoute(['/store/list-view', 'categoryId' => $cat->id]);?>"><?=$cat->name;?></a>
                                    </label>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="col-md-9 col-sm-8 col-xs-12" >
                        <div id="productsList">
                            <?php foreach($products as $product) { ?>
                                <article class="item-list clearfix">
                                    <div class="col-md-4 col-sm-5 col-xs-6">
                                        <div class="img-wrapper">
                                            <a href="<?=Url::toRoute(['/store/item-card', 'id' => $product->id]);?>"> <img src="<?=$product->getImage()->getUrl('200x200');?>" alt="<?=$product->name;?>" class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-7 col-xs-6">
                                        <h4 class="title">
                                            <a href="<?=Url::toRoute(['/store/item-card', 'id' => $product->id]);?>"><?=$product->name?></a>
                                            <span class="price">$<?=$product->price?></span>
                                        </h4>
                                        <div class="item-description">
                                            <ul class="properties">
                                                <?=Show::widget(['model' => $product]);?>
                                            </ul>
                                        </div>
                                        <?=BuyButton::widget(['model' => $product]);?>
                                    </div>
                            </article>
                            <?php }?>
                        </div>
                </div>

            </div>

            <div class="pagination clearfix">
                <?php echo LinkPager::widget([
                    'pagination' => $pages,
                ]);?>

            </div>
        </div>
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
