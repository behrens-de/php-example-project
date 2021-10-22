<?php

namespace App\UserDashboard\MVC;

use App\App\AbstractMVC\AbstractController;
use App\User\UserDatabase;

class UserDashboardController extends AbstractController{

    public function __construct(UserDatabase $userDatabase){
        $this->userDatabase = $userDatabase;
    }

    public function userDashboardMain(){
        $this->pageload('UserDashboard/MVC/Views/','userDashboardMain.php',[]);
    }
}