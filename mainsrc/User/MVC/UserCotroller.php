<?php

namespace App\User\MVC;

use App\App\AbstractMVC\AbstractController;
use App\User\UserDatabase;

class UserCotroller extends AbstractController
{

    public function __construct(UserDatabase $userDatabase)
    {
        $this->userDatabase = $userDatabase;
    }


    public function userProfil($uid)
    {
        $user =  $this->userDatabase->getUser($uid);
        $this->pageload('User/MVC/Views/', 'user.php', ['user' => $user]);
    }

    public function userList()
    {
        $users =  $this->userDatabase->getUsers();
        $this->pageload('User/MVC/Views/', 'users.php', ['users' => $users]);
    }    
}
