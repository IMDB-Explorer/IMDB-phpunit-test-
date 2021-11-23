<?php

class SimpleTest extends \PHPUnit\Framework\TestCase
{
    public function testTrueAssertsToTrue()
    {
        $user = new \App\application\model\UserModel;
        $this->assertTrue(true);
    }
}
?>