<?php
return [
    'bootstrap' => ['gii'],
    'modules' => [
        'gii' => 'yii\gii\Module',
    ],
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=ayumi_anime',
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
        ],
    ]
];
