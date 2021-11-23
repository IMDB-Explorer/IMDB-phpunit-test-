<?php

class UserModelTest extends \PHPUnit\Framework\TestCase
{
    protected $user;
    
    public function setUp():void
    {
        $this->user = new \App\Models\UserModel;
    }
    /** @test */
    public function ThatWeCanGetTheFirstName()
    {
            
            $this->user->SetFirstName("Billy");

            $this->assertEquals($this->user->getFirstName(),'Billy');
    }
    public function testEmailAddressCanBeSet()
    {
        
        $this->user->setEmail('test@gmail.com');

        $this->assertEquals($this->user->getEmail(),'test@gmail.com');
    }

    public function testEmailVariablesContainCorrectValues()
    {
        $this->user->SetFirstName("Billy");
        $this->user->setEmail('test@gmail.com');
        $emailVariables = $this->user->getEmailVariables();

        $this->assertArrayHasKey('name',$emailVariables);
        $this->assertArrayHasKey('email',$emailVariables);
        $this->assertEquals($emailVariables['name'],'Billy');
        $this->assertEquals($emailVariables['email'],'test@gmail.com');
    }
}