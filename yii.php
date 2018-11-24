<?php
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/vendor/yiisoft/yii2/Yii.php';
$config = require __DIR__ . '/config/console.php';
try {
    $yii = new yii\console\Application($config);
} catch (\yii\base\InvalidConfigException $e) {
}
$yii->run();
