<?php

use dvizh\order\widgets\CountByStatusInformer;
use yii\helpers\Url;
use yii\bootstrap\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini"><b><i class="fa fa-home" aria-hidden="true"></i></b></span>' .'Logo'.  '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">
                <li class="dropdown tasks-menu">
                    <a href="<?= Url::to('/'); ?>" title="On the site" target="_blank">
                        <i class="fa fa-globe" style="color: #000" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?= Html::img('@web/images/user2-160x160.jpg', ['class' => 'user-image', 'alt'=>'User Image']) ?>
                        <span class="hidden-xs" style="color: #000"><?= Yii::$app->user->identity->username ?></span>
                    </a>
                    <ul class="dropdown-menu" style="width: auto;">
                        <li class="user-footer">
                            <div class="pull-right">
                                <?= Html::a(
                                    'Выйти',
                                    ['/user/security/logout'],
                                    ['data-method' => 'post', 'class' => 'btn btn-danger btn-flat']
                                ) ?>
                            </div>
                        </li>
                    </ul>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <?= Html::img('@web/images/user2-160x160.jpg', ['class' => 'img-circle', 'alt'=>'User Image']) ?>
                            <p>
                                <?= Yii::$app->user->identity->username ?>
                                <small>Date</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="col-xs-4 text-center">
                                <a href="#">Followers</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">Sales</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">Friends</a>
                            </div>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <?= Html::a(
                                    'Выйти',
                                    ['/user/security/logout'],
                                    ['data-method' => 'post', 'class' => 'btn btn-danger btn-flat']
                                ) ?>
                            </div>
                        </li>

                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
