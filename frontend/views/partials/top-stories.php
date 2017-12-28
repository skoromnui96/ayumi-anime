<?php

use yii\helpers\Url;

?>

<section class="s-top-rated-stories top-rated">
    <div class="container">
        <div class="section-title">
            <h4>Top Rated</h4>
            <h2>Sex Stories</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation </p>
        </div>
        <div class="row">
            <?php foreach ($stories as $story):  ?>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <article class="video-product">
                        <div class="video-wrapper">
                            <a href="<?=Url::to(['news/single', 'slug' => $story->slug]) ?>">
                                <img src="<?=$story->getImage()->getUrl() ?>" class="img-responsive" alt="">
                                <span class="botline">
                                <span class="view-count"><?=$story->views ?> views</span>
                            </span>
                            </a>
                        </div>
                        <div class="video-description">
                            <h4 class="title"><a href="<?=Url::to(['news/single', 'slug' => $story->slug]) ?>"><?=$story->name?></a></h4>
                            <div class="video-info">
                                <ul>
                                    <li class="pubdate"><img src="/public/img/icons/calendar.svg" alt=""> <?=$story->getDate()?></li>
                                </ul>
                            </div>
                            <a href="<?= Url::to(['news/single', 'slug' => $story->slug ]); ?>" class="button bordered">Read more</a>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>