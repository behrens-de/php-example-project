<?php

namespace App\App;

use App\Connections\MySql;
use App\User\MVC\UserCotroller;
use App\User\UserDatabase;
use App\App\Router;
use App\Error\MVC\ErrorController;
use App\Home\IndexDatabase;
use App\Home\MVC\IndexController;
use APP\KeepLogin\KeepLoginDatabase;
use App\Login\MVC\LoginAuth;
use App\Login\MVC\LoginController;
use App\Register\MVC\RegisterController;
use App\UserDashboard\MVC\UserDashboardController;

class Container
{

    private $classInstances = [];
    private $builds = [];


    public function __construct()
    {
        $this->builds = [
            /**
             * Databases
             */
            'pdo' => function () {
                $connection = new MySql();
                return $connection->db1();
            },

            'userDatabase' => function () {
                return new UserDatabase($this->build('pdo'));
            },

            'indexDatabase' => function () {
                return new IndexDatabase($this->build('pdo'));
            },

            'keepLoginDatabase' => function () {
                return new KeepLoginDatabase($this->build('pdo'));
            },

            /**
             * Controller
             */
            'userController' => function () {
                return new UserCotroller($this->build('userDatabase'));
            },

            'errorController' => function () {
                return new ErrorController();
            },

            'indexController' => function () {
                return new IndexController($this->build('indexDatabase'));
            },

            'registerController' => function () {
                return new RegisterController($this->build('userDatabase'));
            },

            'loginController' => function () {
                return new LoginController($this->build('loginAuth'));
            },

            'loginAuth' => function () {
                return new LoginAuth(
                    $this->build('userDatabase'),
                    $this->build('keepLoginDatabase')
                );
            },

            'dashboardController' => function () {
                return new UserDashboardController($this->build('userDatabase'));
            },
            /**
             * Router
             */
            'router' => function () {
                return new Router($this->build('container'));
            },
            /**
             * Container
             */
            'container' => function () {
                return new Container();
            }

        ];
    }

    public function build($object)
    {
        if (isset($this->builds[$object])) {
            if (!empty($this->classInstances[$object])) {
                return $this->classInstances[$object];
            }
            $this->classInstances[$object] = $this->builds[$object]();
        }
        return $this->classInstances[$object];
    }
}
