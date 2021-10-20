<?php

namespace App\User\MVC;

use App\User\UserDatabase;

class UserCotroller
{
    
    public function __construct(UserDatabase $userDatabase)
    {
        $this->userDatabase = $userDatabase;
        // $userDB = $container->bulid('userDatabase');
        // $user = $userDB->getUser($_GET["uid"]);
    }

    public function userProfil($uid){
        return $this->userDatabase->getUser($uid);

    }
}
