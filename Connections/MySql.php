<?php

namespace Connections;
use PDO;

class MySql{

    public function db1(){
        require_once __DIR__.'/dbconfig.php';
        $pdo = new PDO('mysql:host=' . $db1["host"] . ';dbname=' . $db1["name"] . ';charset=utf8', $db1["user"], $db1["password"]);
        // Schaltet die Emulierten Prepares aus 
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $pdo;
    }
}