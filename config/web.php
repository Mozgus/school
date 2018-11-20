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
        ]
    ],
    'modules' => [
        'debug' => [
            'class' => 'yii\debug\Module'
        ]
    ]
];
