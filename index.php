<?php
require_once __DIR__ . '/init.php';

$request = isset($_SERVER["PATH_INFO"]) ? $_SERVER["PATH_INFO"] : $_SERVER["REQUEST_URI"];


$router = $container->bulid('router');

# Startseite
if($request == '/php-example-project/')
{
    $router->add('indexController', 'home');   
} 
# UserListe
elseif($request == '/users')
{
    $router->add('userController', 'userList');   
} 
# Userdetail Seite
elseif($request == '/user/user')
{
    $router->add('userController', 'userProfil');
} 
# 404 Fehlerseite
else 
{
    $router->add('errorController', 'error404');
}


//$router->add('userController');

//var_dump($router);

//$router->add("userController", "allUsers");
// $userController = $container->bulid("userController");
// $user = $userController->allUsers();

// var_dump($users);
// $users = getUsers();
// deleteUser('Max');

?>