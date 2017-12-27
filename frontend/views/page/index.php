<?php

$this->title = 'Page'. ': ' . $page->name;
$this->params['breadcrumbs'][] = ['label' => 'Pages'];
$this->params['breadcrumbs'][] = ['label' => $page->name,  $page->id];

?>


<section class="s-about-me">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-7">
                <div class="title-text">
                    <?=$page->title ?>
                </div>
            </div>
        </div>
        <div class="about-me">
            <div class="col-md-8 col-sm-9">
                <div class="section-title">
                    <?=$page->text ?>
                </div>
            </div>
        </div>
    </div>
</section>
