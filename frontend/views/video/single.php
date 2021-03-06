<?php

use dvizh\cart\widgets\BuyButton;
use yii\helpers\Url;

$this->title = 'Erotic Videos'. ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Erotic Videos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name,  $model->id];
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
                        <span class="pubdate"><i class="fa fa-calendar-o" aria-hidden="true"></i> <?=$model->getDate() ?></span>
                        <p class="title-text"><?=$model->description ?></p>
                        <ul class="rate">
                            <form action="<?=Url::to(['video/like']) ?>">
                            <li class="views"><i class="fa fa-eye" aria-hidden="true"></i> <?=$model->views ?> views</li>
                            <li><button class="rate-button" value="like" name="like" id="like">
                                    <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                                    <span id="counter-like"><?=$model->like ?></span>
                                </button>
                            </li>
                            <li><button class="rate-button" id="dislike"><i class="fa fa-thumbs-o-down" aria-hidden="true"></i> <span id="counter-dislike">0</span></button></li>
                            </form>
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

<?= $this->render('/partials/related-videos', [
    'related' => $related,
]) ?>