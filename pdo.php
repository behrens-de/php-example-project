<?php

require_once __DIR__.'/dbconfig.php';
// Verbinden mit Datenbank 
try {
    $pdo = new PDO('mysql:host='.$db["host"].';dbname='.$db["name"].';charset=utf8', $db["user"], $db["password"]);
    // Schaltet die Emulierten Prepares aus 
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $pdo;

} catch (Exception $e) {
    echo 'Etwas ist schief gelaufen' . $e;
}

