<?php

namespace app\models;

use yii\db\ActiveRecord;

class UserRecord extends ActiveRecord
{
    public static function tableName()
    {
        return "user";
    }

    public function setTestUser()
    {
        $this->name = "John";
        $this->email = "john.ghost@ya.ru";
        $this->passhash = "SHA512";
        $this->status = 2;
    }

}
