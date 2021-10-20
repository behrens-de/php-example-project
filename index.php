<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once __DIR__ . '/init.php';

$request = isset($_SERVER["PATH_INFO"]) ? $_SERVER["PATH_INFO"] : $_SERVER["REQUEST_URI"];


$router = $container->bulid('router');


if($request == '/php-example-project/'){
    $router->add('userController', 'userList');   
} elseif($request == '/user/user'){
    $router->add('userController', 'userProfil');
} else {
    echo "<h1 style='text-align: center;'>Diese Seite ist nicht erreichbar!<br>Weil, wegen ist so!!!</h1>
    <a style='display: block; text-align: center;' href='/php-example-project/'> schnell zurück zur Startseite!</a>";
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