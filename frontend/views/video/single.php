<?php

use dvizh\cart\widgets\BuyButton;
use yii\helpers\Url;

?>

<section class="s-video-inside">
    <div class="container">
        <a href="<?=Url::to(['index']) ?>>" class="direction-btn-left">back to videos</a>
        <article class="main-video">
            <div class="row">
                <div class="col-md-8 col-sm-7">
                    <div class="video-wrapper">
                        <video id="my-video" class="video-js" controls preload="auto" poster="<?=$model->getImage()->getUrl()?>" data-setup="{}">
                            <source src="<?=$model->getVideo() ?>" type='video/mp4'>
                            <p class="vjs-no-js">
                                To view this video please enable JavaScript, and consider upgrading to a web browser that
                                <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                            </p>
                        </video>
                    </div>
                </div>
                <div class="col-md-3 col-sm-5">
                    <div class="video-info">
                        <h4 class="title"><?=$model->name ?></h4>
                        <span class="pubdate"><i class="fa fa-calendar-o" aria-hidden="true"></i> 23.09.2017</span>
                        <p class="title-text"><?=$model->description ?></p>
                        <ul class="rate">
                            <li class="views"><i class="fa fa-eye" aria-hidden="true"></i> <?=$model->views ?> views</li>
                            <li><button class="rate-button" id="like"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> <span id="counter-like">0</span></button></li>
                            <li><button class="rate-button" id="dislike"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i> <span id="counter-dislike">0</span></button></li>
                        </ul>
                        <ul class="price">
                            <li class="old">$<?=$model->old_price ?></li>
                            <li class="new">$<?=$model->price ?> (SAVE 20%)</li>
                        </ul>
                        <div class="subscribe">
                            <?= BuyButton::widget(['model' => $model, 'text' => '+  Add to cart', 'cssClass' => 'button colored']);?>
                            <button class="button bordered btn-disable">Watch Full Video</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-sm-11 col-md-offset-1 col-sm-offset-1">
                    <div class="video-description">
                        <h4>Description</h4>
                        <p><?=$model->main_text ?></p>
                    </div>
                </div>
            </div>
        </article>
    </div>
</section>

<section class="s-videos">
    <div class="container">
        <div class="section-title">
            <h4>Ayumi anime</h4>
            <h2>Related videos</h2>
        </div>
        <div class="result">
            <div class="row">
                <?php foreach ($related as $item): ?>
                <div class="col-md-4 col-sm-4">
                    <article class="video-product">
                        <div class="video-wrapper">
                            <a href="<?= Url::to(['video/single', 'id' => $item->id ]); ?>">
									<span class="topline">
										<span class="hd">HD</span>
									</span>

                                <img src="<?=$item->getImage()->getUrl()?>" class="img-responsive" alt="">

                                <span class="play-icon"><img src="/public/img/icons/play-button.svg" alt=""></span>
                                <span class="botline">
										<span class="view-count"><?=$item->views ?> views</span>
										<span class="recent-count"><img src="/public/img/icons/heart.svg" alt=""> 82</span>
									</span>
                            </a>
                        </div>
                        <div class="video-description">
                            <h4 class="title"><a href="<?= Url::to(['video/single', 'id' => $item->id ]); ?>">Scarlett Knightley - Passionate Love Making After Being Away</a></h4>
                            <div class="video-info">
                                <ul>
                                    <li class="old-price">$<?=$item->old_price?></li>
                                    <li class="new-price">$<?=$item->price ?> (SAVE 20%)</li>
                                    <li class="pubdate"><img src="/public/img/icons/calendar.svg" alt=""> 23.09.2017</li>
                                </ul>
                            </div>
                            <button class="button bordered">Add to cart</button>
                        </div>
                    </article>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
