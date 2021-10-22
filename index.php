<?php
require_once __DIR__ . '/init.php';


/**
 * Routing
 */
$request = isset($_SERVER["PATH_INFO"]) ? $_SERVER["PATH_INFO"] : $_SERVER["REQUEST_URI"];
// ------
$router = $container->bulid('router');
# Startseite
if($request == '/php-example-project/'){
    $router->add('indexController', 'home');   
} 
# UserListe
elseif($request == '/users'){
    $router->add('userController', 'userList');   
} 
# Userdetail Seite
elseif($request == '/users=user'){
    $router->add('userController', 'userProfil');
} 
# Register Seite
elseif($request == '/register'){
    $router->add('registerController', 'register');
} 
# Register Seite
elseif($request == '/login'){
    $router->add('loginController', 'login');
} 

# 404 Fehlerseite (Default)
else {
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