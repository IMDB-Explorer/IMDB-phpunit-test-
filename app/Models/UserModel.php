<?php

namespace App\Models;

class UserModel
{
    public $first_name;
    public $email;


    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;
    }
    
    public function getFirstName()
    {
        return $this->first_name;
    }

    public function setEmail($email)
    {
        $this->email =$email;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getEmailVariables()
    {
        return [
            'name' => $this->getFirstName(),
            'email'=> $this->getEmail(),
        ];
    }
}