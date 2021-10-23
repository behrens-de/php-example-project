<?php

namespace App\Login\MVC;

use APP\KeepLogin\KeepLoginDatabase;
use App\User\UserDatabase;

class LoginAuth
{

    public function __construct(UserDatabase $userDatabase, KeepLoginDatabase $keepLoginDatabase)
    {
        $this->userDatabase = $userDatabase;
        $this->keepLoginDatabase = $keepLoginDatabase;
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

    public function buildKeepLogin($email){
        $user = $this->userDatabase->getUserByEmailOrUsername($email);
        $userID = $user->id;
        $identifier = time().bin2hex(random_bytes(8));
        $securitytoken = time().bin2hex(random_bytes(10));

        $this->keepLoginDatabase->createSecurityToken($userID, $identifier, password_hash($securitytoken, PASSWORD_DEFAULT));
    }
}
