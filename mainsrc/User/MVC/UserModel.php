<?php
namespace App\User\MVC;

class UserModel{

    // UserDatabase Splaten

    public $id;
    public $firstname;
    public $lastname;
    public $email;
    public $password;
    public $bio;
	

    public function hello(){
        return 'Hallo '.$this->firstname;
    }
}