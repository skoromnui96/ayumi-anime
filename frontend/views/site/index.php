<?php

use common\widgets\SubscribeWidget;
use dvizh\cart\widgets\BuyButton;
use yii\bootstrap\Html;
use yii\helpers\Url;

$this->title = 'Ayumi Anime Web site';
?>

<section class="s-main-heading">
    <?php
    foreach ($sliders as $slider): ?>
        <div class="slide">
            <img src="<?=$slider->getImage()->getUrl();?>" alt="<?=$slider->name;?>" class="img-responsive" />
            <div class="container">
                <div class="title-text">
                    <h1 class="clearfix"><?=$slider->name ?></h1>
                    <p><?=$slider->short_text ?></p>
                    <?php if ($slider->url == '#'): ?><?php else: ?>
                        <a href="<?=$slider->url ?>" class="button colored">Button</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</section>

<section class="s-last-videos">
    <div class="container">
        <div class="tabs">
            <ul class="tabs-caption">
                <li class="is-open">
                    <h3>Latest videos</h3>
                </li>
                <li>
                    <h3>Most popular</h3>
                </li>
            </ul>
            <div class="tabs-content is-open">
                <div class="row">
                    <?php foreach ($latest as $item): ?>
                        <div class="col-md-4 col-sm-4">
                            <article class="video-product">
                                <div class="video-wrapper">
                                    <a href="<?= Url::to(['video/single', 'id' => $item->id ]); ?>">
                                <span class="topline">
                                    <span class="hd">HD</span>
                                </span>
                                        <img src="<?=$item->getImage()->getUrl()?>" alt="" class="img-responsive">

                                        <span class="play-icon"><img src="/public/img/icons/play-button.svg" alt=""></span>
                                        <span class="botline">
                                    <span class="view-count"><?=$item->views ?> views</span>
                                    <span class="recent-count"><img src="/public/img/icons/heart.svg" alt=""> 82</span>
                                </span>
                                    </a>
                                </div>
                                <div class="video-description">
                                    <h4 class="name"><a href="<?= Url::to(['news/single', 'id' => $item->id ]); ?>"><?=$item->name ?></a></h4>
                                    <div class="video-info">
                                        <ul>
                                            <li class="old-price">$<?=$item->old_price ?></li>
                                            <li class="new-price">$<?=$item->price ?> (SAVE 20%)</li>
                                            <li class="pubdate"><img src="/public/img/icons/calendar.svg" alt=""> <?=$item->getDate() ?></li>
                                        </ul>
                                    </div>
                                    <?= BuyButton::widget(['model' => $item, 'text' => 'Add to cart']);?>
                                </div>
                            </article>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="view-more"><a href="<?=Url::to(['/video/index']) ?>" class="direction-btn-vertical">View All</a></div>
            </div>
            <div class="tabs-content">
                <div class="row">
                    <?php foreach ($popular as $item): ?>
                        <div class="col-md-4 col-sm-4">
                            <article class="video-product">
                                <div class="video-wrapper">
                                    <a href="<?= Url::to(['video/single', 'id' => $item->id ]); ?>">
                                <span class="topline">
                                    <span class="hd">HD</span>
                                </span>
                                        <img src="<?=$item->getImage()->getUrl()?>" alt="" class="img-responsive">

                                        <span class="play-icon"><img src="/public/img/icons/play-button.svg" alt=""></span>
                                        <span class="botline">
                                    <span class="view-count"><?=$item->views ?> views</span>
                                    <span class="recent-count"><img src="/public/img/icons/heart.svg" alt=""> 82</span>
                                </span>
                                    </a>
                                </div>
                                <div class="video-description">
                                    <h4 class="name"><a href="<?= Url::to(['news/single', 'id' => $item->id ]); ?>"><?=$item->name ?></a></h4>
                                    <div class="video-info">
                                        <ul>
                                            <li class="old-price">$<?=$item->old_price ?></li>
                                            <li class="new-price">$<?=$item->price ?> (SAVE 20%)</li>
                                            <li class="pubdate"><img src="/public/img/icons/calendar.svg" alt=""> <?=$item->getDate() ?></li>
                                        </ul>
                                    </div>
                                    <?= BuyButton::widget(['model' => $item, 'text' => 'Add to cart']);?>
                                </div>
                            </article>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="view-more"><a href="<?=Url::to(['/video/index']) ?>" class="direction-btn-vertical">View All</a></div>
            </div>
        </div>
    </div>
</section>

<?= $this->render('/partials/top-videos', [
    'topVideos' => $topVideos,
]) ?>

<section class="s-subscribe" id="s-subscribe">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="follow-us">
                    <div class="section-title">
                        <h4>Twitter</h4>
                        <h2>Latest Tweets</h2>
                    </div>
                    <div class="twitter-widget clearfix">
                        <img src="/public/img/twitter.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="view-more"><a href="#" class="direction-btn-rigt">View on Twitter</a></div>
                </div>
            </div>
            <div class="col-md-4 col-sm-5 col-xs-12 col-md-offset-2 col-sm-offset-1">
                <div class="subscribe-us">
                    <h3>Subscribe for a monthly roundup of best video</h3>
                    <p>Don't worry, we hate spam too - that's why we only send out monthly emails.</p>
                    <?= SubscribeWidget::widget() ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="s-last-broadcast">
    <div class="container">
        <div class="section-title">
            <h4>the hottest live show</h4>
            <h2>The last broadcasts</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
        </div>
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div class="video-wrapper">
                    <img src="/public/img/broadcast.jpg" alt="" class="img-responsive">

                    <div class="video-description">
                        <h4 class="title"><a href="#">Scarlett Knightley - Passionate Love Making After Being Away</a></h4>
                        <ul>
                            <li class="pubdate"><img src="/public/img/icons/eye.svg" alt=""> September 23, 2017</li>
                            <li class="views-count"><img src="/public/img/icons/calendar.svg" alt=""> 107,803 views</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="related-videos clearfix">
                    <div class="col-md-12 col-sm-4 col-xs-12 no-padding">
                        <article class="related-video-product clearfix">
                            <div class="col-md-5 col-sm-12 col-xs-5 no-padding">
                                <div class="img-wrapper">
                                    <a href="#">
                                        <img src="/public/img/img.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-12 col-xs-7 no-padding">
                                <div class="description-text">
                                    <h4 class="title"><a href="#">Scarlett Knightley Passionate Love...</a></h4>
                                    <span class="pubdate"><img src="/public/img/icons/calendar.svg" alt=""> September 23, 2017</span>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-12 col-sm-4 col-xs-12 no-padding">
                        <article class="related-video-product clearfix">
                            <div class="col-md-5 col-sm-12 col-xs-5 no-padding">
                                <div class="img-wrapper">
                                    <a href="#">
                                        <img src="/public/img/img-1.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-12 col-xs-7 no-padding">
                                <div class="description-text">
                                    <h4 class="title"><a href="#">Scarlett Knightley Passionate Love...</a></h4>
                                    <span class="pubdate"><img src="/public/img/icons/calendar.svg" alt=""> September 23, 2017</span>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-12 col-sm-4 col-xs-12 no-padding">
                        <article class="related-video-product clearfix">
                            <div class="col-md-5 col-sm-12 col-xs-5 no-padding">
                                <div class="img-wrapper">
                                    <a href="#">
                                        <img src="/public/img/img-2.jpg" alt="" class="img-responsive">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-7 col-sm-12 col-xs-7 no-padding">
                                <div class="description-text">
                                    <h4 class="title"><a href="#">Scarlett Knightley Passionate Love...</a></h4>
                                    <span class="pubdate"><img src="/public/img/icons/calendar.svg" alt=""> September 23, 2017</span>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <div class="view-more"><button class="direction-btn-vertical">View All</button></div>
    </div>
</section>

<section class="s-join-now">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-10 col-md-offset-2 col-sm-offset-1">
                <h3>What are you waiting?</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
                <a href="#" class="button colored sing-up">Join Now <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</section>
