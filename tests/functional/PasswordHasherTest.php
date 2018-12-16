<?php

use app\models\UserRecord;
use yii\base\Security;

class PasswordHasherTest extends \Codeception\Test\Unit
{
    /**
     * @var \FunctionalTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testPasswordIsHash()
    {
        $my_password = 'qwas123';

        $userRecord_local = new UserRecord();
        $userRecord_local->setTestUser();

        $userRecord_local->setPassword($my_password);
        $userRecord_local->save(); // save to DB

        $userRecord_found = UserRecord::findOne($userRecord_local->id);
        $this->assertInstanceOf(get_class($userRecord_local), $userRecord_found);

        $security = new Security();
        $this->assertTrue($security->validatePassword(
            $my_password,
            $userRecord_found->passhash));
    }

    public function testPasswordIsNotRehashed()
    {
        $my_password = 'qwas123';

        $userRecord_local = new UserRecord();
        $userRecord_local->setTestUser();

        $userRecord_local->setPassword($my_password);
        $userRecord_local->save(); // save to DB

        $first_hash = $userRecord_local->passhash;

        $userRecord_local->name .= mt_rand(2, 9);
        $userRecord_local->save();

        $this->assertEquals($first_hash, $userRecord_local->passhash);

        $userRecord_found = UserRecord::findOne($userRecord_local->id);
        $this->assertEquals($first_hash, $userRecord_found->passhash);
    }

}
