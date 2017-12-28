<?php

use dvizh\cart\widgets\BuyButton;
use yii\helpers\Url;

?>

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
                                <a href="<?= Url::to(['video/single', 'slug' => $item->slug ]); ?>">
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
                                <h4 class="title"><a href="<?= Url::to(['video/single', 'slug' => $item->slug ]); ?>"><?= $item->name ?></a></h4>
                                <div class="video-info">
                                    <ul>
                                        <li class="old-price">$<?=$item->old_price?></li>
                                        <li class="new-price">$<?=$item->price ?> (SAVE 20%)</li>
                                        <li class="pubdate"><img src="/public/img/icons/calendar.svg" alt=""> <?= $item->getDate() ?></li>
                                    </ul>
                                </div>
                                <?= BuyButton::widget(['model' => $item, 'text' => 'Add to cart']);?>
                            </div>
                        </article>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
