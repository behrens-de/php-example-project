<?php

require_once __DIR__.'/dbconfig.php';

// Verbinden mit Datenbank 
try {
    $pdo = new PDO('mysql:host='.$db["host"].';dbname='.$db["name"].';charset=utf8', $db["user"], $db["password"]);

} catch (Exception $e) {
    echo 'Etwas ist schief gelaufen' . $e;
}

// Daten aus Datenbank Abrufen 
function getUsers(){
    global $pdo;
    return $pdo->query('SELECT firstname, lastname FROM users');
}

function createUser(){
    global $pdo;
    $pdo->query("INSERT INTO `users` (`firstname`,`lastname`,`email`,`password`) VALUES ('John','Doe','john@doe.de','test123')");
}

function deleteUser(){
    global $pdo;
    $pdo->query("DELETE  FROM `users` WHERE firstname = 'John'");
}

function updateUser(){
    global $pdo;
    $pdo->query("UPDATE `users` SET `password` = 'Neues Password' WHERE id = '1'");
}