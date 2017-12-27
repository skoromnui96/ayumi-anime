<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\models\Page;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use dvizh\cart\widgets\CartInformer;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="shortcut icon" href="/public/img/favicon/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/public/img/favicon/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/public/img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/public/img/favicon/apple-touch-icon-114x114.png">

    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#000">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#000">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#000">
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<header>
    <div class="broadcast-announcement">
        <div class="container">
            <p class="announcement"><span class="attention">NEXT LIVE SHOW</span> begin in <span class="date">5 pm September 25, 2017</span></p>
        </div>
    </div>
    <div class="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-12">
                    <h2 class="logo"><a href="#adult-modal" data-fancybox="modal">LOGO</a></h2>
                    <button class="menu-open"><i class="fa fa-bars" aria-hidden="true"></i></button>
                </div>
                <div class="col-md-9 col-sm-12 col-md-offset-1">
                    <nav class="main-navigation">
                        <ul class="nav-menu">
                            <li><a href="<?= Url::to('/site/index') ?>">Home</a></li>
                            <li><a href="<?= Url::to('/video/index') ?>">Videos</a></li>
                            <li><a href="<?= Url::to('/photo/index') ?>">Photos</a></li>
                            <li><a href="<?= Url::to('/broadcasts/index') ?>">Broadcasts</a></li>
                            <li><a href="<?= Url::to('/news/index') ?>">BLOG</a></li>
                            <li><a href="<?=Url::toRoute(['store/card-view']);?>">Store</a> <?= CartInformer::widget(['htmlTag' => 'span', 'offerUrl' => '/?r=cart', 'text' => '{c}', 'class' => 'count']); ?></li>
                            <li class="show-more">
                                <a href="#">MORE</a>
                                <?php $pages = Page::getPages() ?>
                                <?php if (!empty($pages)): ?>
                                <div class="more">
                                    <ul>
                                        <?php foreach ($pages as $page): ?>
                                            <li><a href="<?=Url::to(['/page/index', 'id' => $page->id]) ?>"><?=$page->name?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                                <?php endif; ?>
                            </li>
                        </ul>
                        <ul class="search-nav">
                            <li><button class="quick-search-open"><img src="/public/img/icons/magnifying-glass.svg" alt=""></button></li>
                            <li><a href="sign-up.html" class="button colored sing-up">Join Now <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a></li>
                        </ul>
                        <div class="search-wrapper">
                            <div class="search">
                                <form action="<?=Url::to(['/video/search']) ?>" method="get">
                                    <button><img src="/public/img/icons/magnifying-glass.svg" alt=""></button>
                                    <input type="text" placeholder="Search..." name="search">
                                </form>
                            </div>
                            <button class="quick-search-close"><img src="/public/img/icons/close-big.svg" alt=""></button>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="breadcrumbs">
    <div class="container">
        <?=
        Breadcrumbs::widget(
            [
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]
        ) ?>
    </div>
</div>

<?= $content ?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-3">
                <h2 class="logo">LOGO</h2>
            </div>
            <div class="col-md-2 col-sm-3 col-md-offset-1">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Videos</a></li>
                    <li><a href="#">Photos</a></li>
                    <li><a href="#">Photos</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Store</a></li>
                    <li><a href="#">Join Now</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-3 col-md-offset-1">
                <ul>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                    <li><a href="#">Payment Processing</a></li>
                    <li><a href="#">Customer Support</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-3">
                <ul class="social">
                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                </ul>
                <p class="copy">
                    © 2017 All rights reserved
                </p>
            </div>
        </div>
    </div>
</footer>

<div class="hidden">
    <section id="adult-modal" class="adult-modal">
        <div class="content">
            <h3 class="title">Site is an adult community</h3>
            <p class="title-text">It contains adult-oriented, age-restricted content. You must be at least 18 years old to enter.</p>
            <div class="description-text">
                <p>If you are under the age of 18 years, or under the age of majority in the location from where you are accessing this website you do not have authorization or permission to enter this website or access any of its materials.</p>
                <p>If you are over the age of 18 years or over the age of majority in the location from where you are accessing this website by entering the website you hereby agree to comply with all the <a href="terms-and-conditions.html">TERMS AND CONDITIONS</a>.</p>
                <p>You also acknowledge and agree that you are not offended by nudity and explicit depictions of sexual activity. By clicking on the "Enter" button, and by entering this website you agree with all the above and certify under penalty of perjury that you are an adult.</p>
                <p>You also acknowledge and agree that you are not offended by nudity and explicit depictions of sexual activity. By clicking on the "Enter" button, and by entering this website you agree with all the above and certify under penalty of perjury that you are an adult.</p>
                <p>You also acknowledge and agree that you are not offended by nudity and explicit depictions of sexual activity. By clicking on the "Enter" button, and by entering this website you agree with all the above and certify under penalty of perjury that you are an adult.</p>
                <p>You also acknowledge and agree that you are not offended by nudity and explicit depictions of sexual activity. By clicking on the "Enter" button, and by entering this website you agree with all the above and certify under penalty of perjury that you are an adult.</p>
            </div>
            <div class="submit">
                <button class="button bordered">Leave</button>
                <button class="button colored">I am over 18! - Enter</button>
            </div>
        </div>
    </section>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
