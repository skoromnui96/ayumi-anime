<?php

use dmstr\widgets\Menu;
use dvizh\order\widgets\CountByStatusInformer;
use yii\bootstrap\Html;

?>

<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <?= Html::img('@web/images/user2-160x160.jpg', ['class' => 'img-circle', 'alt' => 'User Image']) ?>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>

        <?= Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'encodeLabels' => false,
                'items' => [
                    ['label' => 'Menu', 'options' => ['class' => 'header']],
                    ['label' => 'Dashboard', 'icon' => 'fa fa-dashboard',
                        'url' => ['/'], 'active' => $this->context->route == 'site/index'
                    ],
                    [
                        'label' => 'Orders ' . CountByStatusInformer::widget([
                                'renderEmpty' => true,
                                'iTagCssClass' => '',
                                'aTag' => false
                            ]) ,
                        'icon' => 'fa fa-suitcase',
                        'visible' => Yii::$app->user->can('superadmin'),
                        'url' => ['/order/order/index']
                    ],
                    [
                        'label' => 'Catalog',
                        'icon' => 'fa fa-database',
                        'url' => '#',
                        'visible' => Yii::$app->user->can('superadmin'),
                        'items' => [
                            [
                                'label' => 'Banner',
                                'icon' => 'fa fa-picture-o',
                                'url' => ['/slider/index'],
                            ],
                            [
                                'label' => 'Video',
                                'icon' => 'fa fa-play',
                                'url' => ['/video/index'],
                            ],
                            [
                                'label' => 'Top Videos',
                                'icon' => 'fa fa-video-camera',
                                'url' => ['/top-videos/index'],
                            ],
                            [
                                'label' => 'News',
                                'icon' => 'fa fa-newspaper-o',
                                'url' => ['/news/index'],
                            ],
                            [
                                'label' => 'Photos',
                                'icon' => 'fa fa-camera',
                                'url' => ['/photo/index'],
                            ],
                            [
                                'label' => 'Photo Category',
                                'icon' => 'fa fa-book',
                                'url' => ['photo-category/index', 'view' => 'list'],
                            ],
                            [
                                'label' => 'Pages',
                                'icon' => 'fa fa-file-text',
                                'url' => ['page/index'],
                            ],

                        ]
                    ],
                    [
                        'label' => 'Магазин',
                        'icon' => 'fa fa-shopping-bag',
                        'url' => '#',
                        'visible' => Yii::$app->user->can('superadmin'),
                        'items' => [
                            ['label' => 'Товары',  'url' => ['/shop/product']],
                            ['label' => 'Категории', 'url' => ['/shop/category']],
                            ['label' => 'Производители', 'url' => ['/shop/producer']],
                            ['label' => 'Фильтры', 'url' => ['/filter/filter']],
                        ],
                    ],
                    [
                        'label' => 'Маркетинг',
                        'icon' => 'fa fa-area-chart',
                        'url' => '#',
                        'visible' => Yii::$app->user->can('superadmin'),
                        'items' => [
                            ['label' => 'Промокоды', 'url' => ['/promocode/promo-code/index']],
                            ['label' => 'Сертификаты', 'url' => ['/certificate/certificate/index']],
                        ],
                    ],
                    [
                        'label' => 'Сайт',
                        'icon' => 'fa fa-sitemap',
                        'url' => '#',
                        'visible' => Yii::$app->user->can('superadmin'),
                        'items' => [
                            ['label' => 'Пользователи', 'url' => ['/user/admin/index']],
                        ],
                    ],
                    [
                        'label' => 'Настройки',
                        'icon' => 'fa fa-cogs',
                        'url' => '#',
                        'visible' => Yii::$app->user->can('superadmin'),
                        'items' => [
                            ['label' => 'Поля контента', 'url' => ['/field/field/index']],
                            ['label' => 'Поля заказа', 'url' => ['/order/field/index']],
                            ['label' => 'Типы цен', 'url' => ['/shop/price-type']],
                            ['label' => 'Типы доставки', 'url' => ['/order/shipping-type/index']],
                            ['label' => 'Типы оплаты', 'url' => ['/order/payment-type/index']],
                            ['label' => 'Настройки сайта', 'url' => ['/settings/default/index']],
                        ]
                    ],
                    ['label' => 'Gii', 'visible' => Yii::$app->user->can('superadmin'), 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
                    ['label' => 'Debug', 'visible' => Yii::$app->user->can('superadmin'), 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],

                ],
            ]
        ) ?>
    </section>
</aside>
