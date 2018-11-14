<?php
define('YII_ENV', 'dev');
define('YII_DEBUG', true);
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';
$config = require __DIR__ . '/../config/web.php';
try {
    $yii = new yii\web\Application($config);
} catch (\yii\base\InvalidConfigException $e) {
}
$yii->run();
