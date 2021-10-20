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

    public function pageload($vars){
        extract($vars); // https://www.php.net/manual/de/function.extract.php
        require_once __DIR__.'/Views/user.php';
    }

    public function userProfil($uid){
        $user =  $this->userDatabase->getUser($uid);
        $this->pageload(['user' => $user ]);

    }
}
