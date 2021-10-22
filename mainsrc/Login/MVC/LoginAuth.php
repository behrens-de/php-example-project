<?php

namespace App\Login\MVC;

use App\User\UserDatabase;

class LoginAuth
{

    public function __construct(UserDatabase $userDatabase)
    {
        $this->userDatabase = $userDatabase;
    }

    public function checkLogin(string $input, string $password): bool
    {
        # prüft ob er einen User findet 
        $user = $this->userDatabase->getUserByEmailOrUsername($input);
        if ($user) {
            #checkt ob das passwort zum Hash passwort in Datenbank passst
            $verify = password_verify($password, $user->password) ? true : false;

            if ($verify) {
                # prevent session hijacking
                session_regenerate_id(true);

                #SET SESSION USERID
                $_SESSION['userid'] = $user->id;
                $_SESSION['loggedin'] = true;
            }

            return $verify;
        }
        return false;
    }
}
