<?php

use yii\bootstrap\Html;
use yii\widgets\Breadcrumbs;
use dmstr\widgets\Alert;

?>
<div class="content-wrapper">
    <section class="content-header">

        <?=
        Breadcrumbs::widget(
            [
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]
        ) ?>
    </section>

    <section class="content">
        <?= Alert::widget() ?>
        <?= $content ?>
    </section>
</div>
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Copyright © 2017. All rights reserved.</b>
    </div>
    <a href="https://beinweb.biz" target="_blank"><?= Html::img('@web/images/logo.svg', ['class' => 'company-logo', 'alt'=>'Company Logo']) ?></a>
</footer>


