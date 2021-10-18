<?php

require_once __DIR__.'/dbconfig.php';
// Verbinden mit Datenbank 
try {
    $pdo = new PDO('mysql:host='.$db["host"].';dbname='.$db["name"].';charset=utf8', $db["user"], $db["password"]);

} catch (Exception $e) {
    echo 'Etwas ist schief gelaufen' . $e;
}

// Daten aus Datenbank abrufen alle User
function getUsers(){
    global $pdo;
    return $pdo->query('SELECT id, firstname, lastname FROM users');
}

// Einen User aus Datenbank abrufen

function getUser($uid){
    global $pdo;
    return $pdo->query("SELECT id, firstname, lastname, bio FROM users WHERE id='$uid'");
}


function createUser(){
    global $pdo;
    $pdo->query("INSERT INTO `users` (`firstname`,`lastname`,`email`,`password`) VALUES ('John','Doe','john@doe.de','test123')");
}

function deleteUser($firstname){
    global $pdo;
    $pdo->query("DELETE  FROM `users` WHERE firstname = '$firstname'");
}

function updateUser(){
    global $pdo;
    $pdo->query("UPDATE `users` SET `password` = 'Neues Password' WHERE id = '1'");
}