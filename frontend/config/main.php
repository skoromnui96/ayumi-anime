<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'modules' => [
        'user' => [
            'as frontend' => 'dektrium\user\filters\FrontendFilter',
        ],
    ],
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '/' => '/site/index',
                'erotic-videos' => '/video/index',
                'erotic-photos' => '/photo/index',
                'news' => '/news/index',
                'store' => '/store/card-view',
                'storе' => '/store/list-view',
                [
                    'pattern' => 'page/<id>',
                    'route' => 'page/index',
                ],
                [
                    'pattern' => 'erotic-videos/<slug>',
                    'route' => 'video/single',
                ],
                [
                    'pattern' => 'news/<slug>',
                    'route' => 'news/single',
                ],
                [
                    'pattern' => '<slug>',
                    'route' => 'page/index',
                ],


            ],
        ],
        'formatter' => [
            'class' => 'yii\i18n\Formatter',
            'defaultTimeZone' => 'America/Los_Angeles',
            'timeZone' => 'GMT-5',
            'dateFormat' => 'MMMM d, yyyy',
            'datetimeFormat' => 'd-M-Y H:i:s',
            'timeFormat' => 'H:i:s',
        ],
        'request' => [
            'baseUrl' => '',
            'csrfParam' => '_csrf-frontend',
        ],
        'user' => [
            'identityClass' => 'dektrium\user\models\User',
            'identityCookie' => [
                'name'     => '_frontendIdentity',
                'path'     => '/',
                'httpOnly' => true,
            ],
        ],
        'session' => [
            'name' => 'FRONTENDSESSID',
            'cookieParams' => [
                'httpOnly' => true,
                'path'     => '/',
            ],
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
    ],
    'params' => $params,
];
