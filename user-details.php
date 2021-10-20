<?php

require_once __DIR__ . '/init.php';

// $userDB = $container->bulid('userDatabase');
// $user = $userDB->getUser($_GET["uid"]);

$userController = $container->bulid("userController");
$user = $userController->userProfil($_GET["uid"]);

//createUser('Max','Muster','mm@testmail.ocm','test123','Ich bin der Max');
//deleteUser('Max');
//updateUser(1,'Hello World');

//var_dump($user);
?>