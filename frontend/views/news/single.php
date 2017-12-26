<?php

use yii\helpers\Url;

$this->title = 'News'. ' ' . $news->name;
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $news->name,  $news->id];
?>

<section class="s-news-inside">
    <div class="container">
        <div class="section-title">
            <h4>AUYMI ANIME LIKE IT</h4>
            <h2><?= $news->name ?></h2>
        </div>
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div class="news-content">
                <div class="news-content">
                    <?= $news->text?>
                </div>
                <div class="news-rating">
                    <ul>
                        <li>
                            <i class="fa fa-calendar-o" aria-hidden="true"></i>
                            <a href="#"> <?= $news->getDate()?></a>
                        </li>
                        <li>
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            <a href="#"><?= $news->views ?> views</a>
                        </li>
                        <li>
                            <div class="social-likes social-likes_light">
                                <div class="twitter" title="Share on Twitter">Twitter</div>
                            </div>
                        </li>
                        <li>
                            <div class="social-likes social-likes_light">
                                <div class="facebook" title="Share on Facebook">Facebook</div>
                            </div>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
            <?= $this->render('/partials/top-stories', [
                'posts' => $posts,
            ]) ?>
        </div>
    </div>
</section>