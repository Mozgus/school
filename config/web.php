<?php
return [
    'id' => 'school',
    'basePath' => realpath(__DIR__ . '/../'),
    'bootstrap' => ['debug'],
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'kaja7iarna7dsn92bgt78fan',
        ],
        'db' => require(__DIR__ . '/db.php'),
        'user' => [
            'identityClass' => 'app\models\UserIdentity',
            'enableAutoLogin' => true
        ]
    ],
    'modules' => [
        'debug' => [
            'class' => 'yii\debug\Module'
        ]
    ]
];
