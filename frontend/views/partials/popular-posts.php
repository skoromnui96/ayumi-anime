<?php

use yii\helpers\Url;

?>

<div class="col-md-4 col-sm-12">
    <div class="popular-posts">
        <h3 class="line line-hover">Popular posts <a href="<?=Url::to(['news/index']) ?>" class="direction-btn-vertical">View All</a></h3>
        <div class="related-videos clearfix">
            <?php foreach ($posts as $post): ?>
                <div class="col-md-12 col-sm-6 col-xs-6 no-padding">
                    <article class="related-video-product clearfix">
                        <div class="col-md-5 col-sm-6 col-xs-6 no-padding">
                            <div class="img-wrapper">
                                <a href="<?= Url::to(['news/single', 'slug' => $post->slug]) ?>">
                                    <img src="<?=$post->getImage()->getUrl() ?>" alt="<?=$post->name ?>" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-6 col-xs-6 no-padding">
                            <div class="description-text">
                                <h4 class="title"><a href="<?= Url::to(['news/single', 'slug' => $post->slug]) ?>"><?=$post->name ?></a></h4>
                                <span class="pubdate"><img src="/public/img/icons/calendar.svg" alt=""> <?=$post->getDate() ?></span>
                            </div>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>