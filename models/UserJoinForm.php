<?php

namespace app\models;

use yii\base\Model;

class UserJoinForm extends Model
{
    public $name;
    public $email;
    public $password;
    public $password2;

    public function rules()
    {
        return [
            ['name', 'required'],
            ['email', 'required'],
            ['password', 'required'],
            ['password2', 'required'],
            ['name', 'string', 'min' => 3, 'max' => 30],
            ['email', 'email'],
            ['password', 'string', 'min' => 4],
            ['password2', 'compare', 'compareAttribute' => 'password'],
            ['email', 'errorIfEmailUsed']
        ];
    }

    public function setUserRecord(UserRecord $userRecord)
    {
        $this->name = $userRecord->name;
        $this->email = $userRecord->email;
        $this->password = $this->password2 = "qwas";
    }

    public function errorIfEmailUsed()
    {
        if (0 == UserRecord::find()->where(['email' => $this->email])->count())
            return;
        $this->addError('email', 'This e-mail already exists');
    }

}
