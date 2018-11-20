<?php

namespace app\controllers;

use yii;
use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex()
    {
        Yii::debug("I am here!", "site");
        return $this->render("index");
    }

    public function actionJoin()
    {
        return $this->render("join");
    }

    public function actionLogin()
    {
        return $this->render("login");
    }

}
