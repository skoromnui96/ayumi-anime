<?php
use yii\helpers\Url;
use dvizh\shop\models\Category;
use dvizh\shop\widgets\ShowPrice;
use dvizh\filter\widgets\FilterPanel;
use dvizh\field\widgets\Show;
use dvizh\cart\widgets\ElementsList;
use dvizh\cart\widgets\CartInformer;
use dvizh\cart\widgets\ChangeOptions;
use dvizh\cart\widgets\ChangeCount;
use dvizh\cart\widgets\TruncateButton;
use dvizh\cart\widgets\BuyButton;
use dvizh\order\widgets\OrderForm;
use dvizh\promocode\widgets\Enter;
use dvizh\certificate\widgets\CertificateWidget;

/* @var $this yii\web\View */

$this->title = 'Модули Dvizh';

?>

<div class="breadcrumbs">
    <div class="container">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="shop-card.html">Store</a></li>
            <li><a href="#">Ordering</a></li>
        </ul>
    </div>
</div>

<?php //$elements = yii::$app->cart->elements; var_dump($elements);?>
<section class="s-ordering">
    <div class="container">
        <div class="section-title">
            <h4>Your Cart</h4>
            <h2>billing & shipping</h2>
        </div>
        <div class="shop">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <?=OrderForm::widget();?>
                </div>
                </div>
                <div class="col-md-9 col-sm-8 col-xs-12">
                    <h3 class="title">Your order <a href="#" class="cart-button"><i class="fa fa-shopping-basket" aria-hidden="true"></i><?= CartInformer::widget(['htmlTag' => 'span', 'offerUrl' => '/?r=cart', 'text' => '{c} items']); ?></a></h3>
                    <div class="order horizontal-only">
                        <?=ElementsList::widget();?>
                    </div>
                </div>
                <div class="col-md-9 col-sm-8 col-xs-12">
                    <div class="total-count">
                        <ul>
                            <li class="total">Total: <?= CartInformer::widget(['htmlTag' => 'span', 'offerUrl' => '/?r=cart', 'text' => '${p}']); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

</section>

<div class="hidden">
    <section class="order-edit-modal s-ordering" id="order-edit-modal">
        <div class="shop">
            <h3>Billing adress edit</h3>
            <div class="sidebar">
                <form action="#" class="ordering-form">

                    <div class="cat-content">
                        <h4 class="cat-name">Contact info</h4>
                        <div class="filter">
                            <input type="checkbox" id="s-1"><label for="s-1">Sing me up to email news...</label>
                        </div>
                        <input type="email" placeholder="E mail">
                    </div>

                    <div class="cat-content">
                        <h4 class="cat-name">Billing adress</h4>
                        <div class="filter">
                            <input type="checkbox" id="s-2"><label for="s-2">My shopping adress is the same</label>
                        </div>
                        <div class="dropdown-wrapper">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    Mr
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Mr</a></li>
                                    <li><a href="#">Mrs</a></li>
                                </ul>
                            </div>
                        </div>
                        <input type="text" placeholder="First name" class="first-name">
                        <input type="text" placeholder="Last Name">
                        <div class="dropdown-wrapper">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    State
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">United States</a></li>
                                    <li><a href="#">United States</a></li>
                                </ul>
                            </div>
                        </div>
                        <input type="text" placeholder="Adress line 1">
                        <input type="text" placeholder="Adress line 2 (optional)">
                        <div class="dropdown-wrapper">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    State
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">United States</a></li>
                                    <li><a href="#">United States</a></li>
                                </ul>
                            </div>
                        </div>
                        <input type="text" placeholder="City" class="first-name">
                        <input type="text" placeholder="Postal code">
                        <input type="tel" placeholder="Phone - (202) 555 - 0123">
                    </div>

                    <div class="cat-content">
                        <h4 class="cat-name">Select delivery method</h4>
                        <ul class="radio-group">
                            <li><label for="del-1"><input type="radio" name="delivery" id="del-1">Standard Ground <span class="cost">FREE</span></label></li>
                            <li><label for="del-2"><input type="radio" name="delivery" id="del-2">2nd Day Air <span class="cost">$24.95</span></label></li>
                            <li><label for="del-3"><input type="radio" name="delivery" id="del-3">Next Day Air <span class="cost">$24.95</span></label></li>
                        </ul>
                    </div>
                    <div class="submit">
                        <button class="button colored">Continue to rewiew and pay <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </section>