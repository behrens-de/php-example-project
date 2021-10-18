<?php

require_once __DIR__.'/dbconfig.php';

// Verbinden mit Datenbank 
try {
    $pdo = new PDO('mysql:host='.$db["host"].';dbname='.$db["name"].';charset=utf8', $db["user"], $db["password"]);

} catch (Exception $e) {
    echo 'Etwas ist schief gelaufen' . $e;
}

// Daten aus Datenbank Abrufen 
if (!empty($pdo)) {
    // Daten Abrufen
    $users = $pdo->query('SELECT firstname, lastname FROM users');

    // Daten hinzufügen
    $newUser = $pdo->query("INSERT INTO `users` (`firstname`,`lastname`,`email`,`password`) VALUES ('John','Doe','john@doe.de','test123')");

    // Daten Löschen
    $deletUser = $pdo->query("DELETE  FROM `users` WHERE firstname = 'John'");

    // Daten updaten
    $updateUser = $pdo->query("UPDATE `users` SET `password` = 'Neues Password' WHERE id = '1'");

}