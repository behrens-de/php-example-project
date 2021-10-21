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
        var_dump($_POST);

        if(!empty($_POST)){
            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $submit = $_POST["submit"];

            $create = $this->userDatabase->createUser($firstname, $lastname, $username, $email, $password, 'Eine kleine Kurzgeschichte');
            var_dump($create);
        }

        $this->pageload('Register/MVC/Views/', 'register.php', []);
    }
}
