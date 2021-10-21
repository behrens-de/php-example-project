<?php

namespace App\Home\MVC;

use App\App\AbstractMVC\AbstractController;
use App\Home\IndexDatabase;

class IndexController extends AbstractController{

    public function __construct(IndexDatabase $indexDatabase)
    {
        $this->indexDatabsa = $indexDatabase;
    }


    public function home(){
        $this->pageload('Home/MVC/Views/','home.php',[]);
    }


}