<?php

class UserModelTest extends \PHPUnit\Framework\TestCase
{
    
    protected $user;

    public function setUp():void
    {
        $this->user = new \App\application\model\UserModel;
    }
    /** @test */
    public function checkUserExist()
    {
        $newUser = [
            'id' => '4',
            "username" => 'roksana',
            "email" => "r.mirzayi.1999@gmail.com",
            "password" => "$2y$10$6YcEn5.8OivD82aaoenTke5FIoM13iJi6BOdp2i0aENN6velnqfcy",
            "first_name" => null,
            "last_name"=> null,
            "admin"=> "user",
           "status"=> "not verified",
           "token"=> "a1d0c6e83f027327d8461063f4ac58a6",
           "created_at"=>"2020-08-02 21:42:33",
           "updated_at"=>null
        ];
        $this->user-> checkUserExists("username","roksana");
        $this->assertEquals($this->user->checkUserExists("username","roksana"),$newUser);
    }
     /** @test */
     public function updateUserProfile()
     {
         $newUser = [
             'first_name' => 'ghazal',
             'last_name' => 'najafi',

         ];
         $this->user-> updateUserProfile(2,$newUser);
         $this->assertEquals($this->user->updateUserProfile(2,$newUser),true);
     }

    /** @test */
    public function UserExist()
    {
        $this->user-> userExists("users","id",2);
        $this->assertEquals($this->user->userExists("users","id",2),true);
    }
}