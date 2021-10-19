<?php

namespace User;

use \Connections\MySql;

require_once __DIR__.'/UserDatabase.php';
require_once __DIR__.'/../Connections/MySql.php';

class UserContainer
{

    public function setPDO()
    {
        $connect = new MySql();
        return $connect->db1();
    }

    public function setUserDatabase(){
        return new UserDatabase($this->setPDO());
    }
}
