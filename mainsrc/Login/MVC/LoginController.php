<?php

namespace App\Login\MVC;

use App\App\AbstractMVC\AbstractController;
use App\Login\MVC\LoginAuth;

class LoginController extends AbstractController
{

    public function __construct(LoginAuth $loginAuth)
    {
        $this->loginAuth = $loginAuth;
    }

    public function login()
    {
        $error = null;
        if (!empty($_POST)) {
            // $username = 'coco-schmoko';
            // $password = 'schmoko123';

            #var_dump($_POST);
            $username = $_POST["username"];
            $password =  $_POST["password"];

            if(!empty($_POST["stayLogin"])){
                #TODO Baue eine angemeldet bleiben funtion
            }

            $login = $this->loginAuth->checkLogin($username, $password);
       
            if($login){
                header("Location: /php-example-project/userdashboard");
            } else {
                $error = 'Login ist Fehlgeschlagen';
            }

        }
        $this->pageload('Login/MVC/Views/', 'login.php', ['error'=>$error]);
    }
}
