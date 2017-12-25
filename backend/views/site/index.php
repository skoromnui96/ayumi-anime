<?php
use dvizh\order\widgets\Informer;
use dvizh\order\widgets\ReportPaymentTypes;

/* @var $this yii\web\View */
$this->title = 'Главная'
?>
<div class="site-index">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <?=Informer::widget();?>
        </div>
        <div class="col-md-12">
            <?=ReportPaymentTypes::widget();?>
        </div>

    </div>
</div>
