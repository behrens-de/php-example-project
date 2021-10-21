<?php

namespace App\App;

use App\Connections\MySql;
use App\User\MVC\UserCotroller;
use App\User\UserDatabase;
use App\App\Router;
use App\Error\MVC\ErrorController;
use App\Home\IndexDatabase;
use App\Home\MVC\IndexController;

class Container{

    private $classInstances = [];
    private $builds = [];


    public function __construct()
    {
        $this->builds = [
            /**
             * Databases
             */
            'pdo' => function(){
                $connection = new MySql();
                return $connection->db1();},

            'userDatabase' => function(){
                return new UserDatabase($this->bulid('pdo'));},

            'indexDatabase' => function(){
                return new IndexDatabase($this->bulid('pdo'));},
            /**
             * Controller
             */
            'userController' => function(){
                return new UserCotroller($this->bulid('userDatabase'));
            },

            'errorController' => function(){
                return new ErrorController();
            },

            'indexController' => function(){
                return new IndexController($this->bulid('indexDatabase'));
            },
            /**
             * Router
             */
            'router' => function(){
                return new Router($this->bulid('container'));
            },
            /**
             * Container
             */
            'container' => function(){
                return new Container();
            }           

        ];
    }

    public function bulid($object){
        if(isset($this->builds[$object])){
            if(!empty($this->classInstances[$object])){
                return $this->classInstances[$object];
            }
            $this->classInstances[$object] = $this->builds[$object]();
        }
        return $this->classInstances[$object];
    } 

}