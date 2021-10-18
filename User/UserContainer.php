<?php

namespace User;
use PDO;

require_once __DIR__.'/UserDatabase.php';

class UserContainer
{

    public function setPDO()
    {
        require_once __DIR__.'/../dbconfig.php';
        $pdo = new PDO('mysql:host=' . $db["host"] . ';dbname=' . $db["name"] . ';charset=utf8', $db["user"], $db["password"]);
        // Schaltet die Emulierten Prepares aus 
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $pdo;
    }

    public function setUserDatabase(){
        return new UserDatabase($this->setPDO());
    }
}
