<?php

namespace App\Error\MVC;
use App\App\AbstractMVC\AbstractController;

class ErrorController extends AbstractController {

    public function error404(){
        $this->pageload('Error//MVC/Views/','error404.php',[]);
    }

}