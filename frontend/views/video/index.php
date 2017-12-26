<?php

use dvizh\cart\widgets\BuyButton;
use yii\helpers\Url;
use yii\widgets\LinkPager;

$this->title = 'Erotic Videos';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="s-videos">
    <div class="container">
        <div class="section-title">
            <h4>Ayumianime</h4>
            <h2>EROTIC VIDEOS</h2>
        </div>
        <div class="user-panel">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12 left-col clearfix">
                    <div class="sort">
                        <div class="dropdown-wrapper">
                            <span>Category:</span>
                            <div class="dropdown categories">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    Cosplay
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">This week</a></li>
                                    <li><a href="#">This month</a></li>
                                    <li><a href="#">This year</a></li>
                                    <li><a href="#">All time</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12 right-col clearfix">
                    <div class="sort">
                        <div class="dropdown-wrapper">
                            <span>Sort by:</span>
                            <div class="dropdown timerate">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    All time
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">This week</a></li>
                                    <li><a href="#">This month</a></li>
                                    <li><a href="#">This year</a></li>
                                    <li><a href="#">All time</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="dropdown-wrapper">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    All videos
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Ipsum</a></li>
                                    <li><a href="#">Dolor</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="dropdown-wrapper">
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    Most popular
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Ipsum</a></li>
                                    <li><a href="#">Dolor</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="result">
            <div class="row">
                <?php foreach ($video as $item): ?>
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
                            <h4 class="name"><a href="<?= Url::to(['video/single', 'id' => $item->id ]); ?>"><?=$item->name ?></a></h4>
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
        </div>
        <div class="pagination clearfix">
            <?php echo LinkPager::widget(['pagination' => $pagination,]); ?>
        </div>
    </div>
</section>

<?= $this->render('/partials/top-videos', [
    'topVideos' => $topVideos,
]) ?>