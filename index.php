<?php
require_once __DIR__ . '/init.php';

$userController = $container->bulid("userController");
$user = $userController->userList();

// var_dump($users);
// $users = getUsers();
// deleteUser('Max');

?>