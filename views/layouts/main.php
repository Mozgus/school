<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

?>
<?php $this->beginPage() ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <title>VideoSchool</title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?php
NavBar::begin([
    'brandLabel' => 'VideoSchool',
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar-default navbar-fixed-top'
    ]
]);
$menu = [
    ['label' => 'Join', 'url' => ['/user/join']],
    ['label' => 'Login', 'url' => ['/user/login']]
];
try {
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menu
    ]);
} catch (Exception $e) {
}
NavBar::end();
?>
<div class="container" style="margin-top: 70px">
    <?= $content ?>

</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
