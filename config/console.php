<?php
return [
    'id' => 'school-console',
    'basePath' => dirname(__DIR__),
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=mysql',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ]
    ]
];
