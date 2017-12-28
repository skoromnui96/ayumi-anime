<?php

use yii\helpers\Url;
use yii\widgets\LinkPager;

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="s-news">
    <div class="container">
        <div class="section-title">
            <h4>What does Ayumi Think</h4>
            <h2>News</h2>
        </div>
        <div class="user-panel">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 clearfix">
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
                <?php foreach ($news as $item): ?>
                    <div class="col-md-4 col-sm-4">
                        <article class="video-product">
                            <div class="video-wrapper">
                                <a href="<?= Url::to(['news/single', 'slug' => $item->slug ]); ?>">
                                    <img src="<?=$item->getImage()->getUrl() ?>" class="img-responsive" alt="">
                                    <span class="botline">
                                        <span class="view-count"><?=$item->views?> views</span>
                                    </span>
                                </a>
                            </div>
                            <div class="video-description">
                                <h4 class="title"><a href="<?= Url::to(['news/single', 'id' => $item->id ]); ?>"><?=$item->name?></a></h4>
                                <div class="video-info">
                                    <ul>
                                        <li class="pubdate"><img src="/public/img/icons/calendar.svg" alt=""> <?=$item->getDate()?></li>
                                    </ul>
                                </div>
                                <a href="<?= Url::to(['news/single', 'slug' => $item->slug ]); ?>" class="button bordered">Read more</a>
                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="pagination clearfix">
        <?php
        echo LinkPager::widget(['pagination' => $pagination,]);
        ?>
        </div>
    </div>
</section>

<?= $this->render('/partials/top-stories', [
    'stories' => $stories,
]) ?>