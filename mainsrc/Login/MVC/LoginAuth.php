<?php

namespace App\Login\MVC;

use App\User\UserDatabase;

class LoginAuth
{

    public function __construct(UserDatabase $userDatabase)
    {
        $this->userDatabase = $userDatabase;
    }

    public function checkLogin(string $input, string $password) : bool
    {
        # prüft ob er einen User findet 
        $user = $this->userDatabase->getUserByEmailOrUsername($input);
        if ($user) {
            #checkt ob das passwort zum Hash passwort in Datenbank passst
            return password_verify($password, $user->password) ? true: false;
        }
        return false;
    }
}
