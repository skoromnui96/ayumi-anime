<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Error 404:Page not found';
?>

<section class="s-404">
    <div class="section-title">
        <h1>ERROR 404: Page not found</h1>
        <p>The page you are loooking for was moved, removed, renamed or might never existed. Head back to the homepage.</p>
        <a href="<?= Url::to(['site/index'])?>" class="button colored"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Back to Home page</a>
    </div>
</section>
