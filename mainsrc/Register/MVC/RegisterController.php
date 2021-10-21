<?php

namespace App\Register\MVC;

use App\App\AbstractMVC\AbstractController;
use App\User\UserDatabase;

class RegisterController extends AbstractController
{

    #1: Auf die Userdatabase zugreifen (Model)
    public function __construct(UserDatabase $userDatabase)
    {
        $this->userDatabase = $userDatabase;
    }
    #2: Register rendern (View)
    public function register()
    {
        $fail = null;

        if(!empty($_POST)){
            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $submit = $_POST["submit"];

            // Wenn alles leer ist!
            if(empty($firstname AND $lastname AND $username AND $email AND $password)){
                $fail = 'Bitte fülle alle Felder aus!';
            } else{
                $this->userDatabase->createUser($firstname, $lastname, $username, $email, $password, 'Eine kleine Kurzgeschichte');
            }
        }

        $this->pageload('Register/MVC/Views/', 'register.php', ['fail'=>$fail]);
    }
}
