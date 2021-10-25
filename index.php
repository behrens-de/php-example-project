<?php
session_start();
require_once __DIR__ . '/init.php';
# var_dump($_SESSION);
#var_dump(bin2hex(time().random_bytes(12)));
/**
 * Routing
 */
$request = isset($_SERVER["PATH_INFO"]) ? $_SERVER["PATH_INFO"] : $_SERVER["REQUEST_URI"];
// ------
$router = $container->build('router');
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
# Login Seite
elseif($request == '/login'){
    $router->add('loginController', 'login');
} 

# User Dashboard Seite
elseif($request == '/userdashboard'){
    $router->add('dashboardController', 'userDashboardMain');
} 
# User Logout
elseif($request == '/logout'){
    #todo: schöner machen
    session_destroy();
    header("Location: php-example-project/");
} 
# User Photoalben
elseif($request == '/photoalben'){
    $router->add('photoAlbenController', 'photoAlben');
} 

# User Photoalben
elseif($request == '/photoalben/settings'){
    $router->add('photoAlbenController', 'settings');
} 

# User Photoalben Ajax
elseif($request == '/photoalben-newAlbum'){
    $router->add('photoAlbenController', 'AjaxNewAlbum');
    $router->add('photoAlbenController', 'AjaxPage');
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