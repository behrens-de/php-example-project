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
        $this->pageload('Register/MVC/Views/', 'register.php', []);
    }
}
