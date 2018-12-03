<?php

namespace app\controllers;

use app\models\UserJoinForm;
use app\models\UserRecord;
use Yii;
use yii\web\Controller;

class UserController extends Controller
{
    public function actionJoin()
    {
        if (Yii::$app->request->isPost)
            return $this->actionJoinPost();

        $userJoinForm = new UserJoinForm();
        $userRecord = new UserRecord();
        $userRecord->setTestUser();
        $userJoinForm->setUserRecord($userRecord);
        return $this->render("join", compact('userJoinForm'));
    }

    public function actionJoinPost()
    {
        $userJoinForm = new UserJoinForm();
        if ($userJoinForm->load(Yii::$app->request->post()))
            if ($userJoinForm->validate()) {
                $userRecord = new UserRecord();
                $userRecord->setUserJoinForm($userJoinForm);
                $userRecord->save();
                return $this->redirect('/user/login');
            }
        return $this->render("join", compact('userJoinForm'));
    }

    public function attributeLabels()
    {
        return [
            'email' => 'Адрес эл. почты:',
            'password' => 'Придумайте пароль:',
            'password2' => 'Повторите пароль:'
        ];
    }

    public function actionLogin()
    {
//        $uid = UserIdentity::findIdentity(mt_rand(2, 6));
//        Yii::$app->user->login($uid);
        return $this->render("login");
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect("/");
    }

}
