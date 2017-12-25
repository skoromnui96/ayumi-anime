<?php

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;

?>
<section class="s-gallery">
    <div class="container">
        <div class="section-title">
            <h4>Ayumi anime</h4>
            <h2>EROTIC Photos</h2>
        </div>
        <div class="user-panel">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12 left-col clearfix">
                    <div class="sort">
                        <div class="dropdown-wrapper">
                            <span>Category:</span>
                            <div class="dropdown categories">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    Select category
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <?php foreach($categories as $category):?>
                                        <li class="select">
                                            <a href="<?= Url::toRoute(['photo/category','id'=>$category->id]);?>"><?= $category->name?></a>
                                        </li>
                                    <?php endforeach;?>
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
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($photos as $photo): ?>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="gallery-item">
                        <div class="img-wrapper">
                            <a href="<?=$photo->getImage()->getUrl()?>" data-fancybox="gallery" data-caption='
                            <h4 class="title"><?=$photo->title ?></h4>
                                <div class="botline">
                                <span class="pubdate"><i class="fa fa-calendar-o" aria-hidden="true"></i> <?=$photo->getDate() ?></span>
                            </div>'>
                                <img src="<?=$photo->getImage()->getUrl()?>" alt="" class="img-responsive">
                            </a>
                            <div class="item-description">
                                <span class="zoom-in"><img src="/public/img/icons/magnifying-glass.svg" class="img-responsive" alt=""></span>
                                <div class="topline">
                                    <span class="pubdate"><i class="fa fa-calendar-o" aria-hidden="true"></i> <?=$photo->getDate() ?></span>
                                </div>
                                <div class="content">
                                    <h4 class="title"><?=$photo->title ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="pagination clearfix">
            <?php
            echo LinkPager::widget(['pagination' => $pagination,]);
            ?>
        </div>
    </div>
</section>