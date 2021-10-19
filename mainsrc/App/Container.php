<?php

namespace App\App;

use App\Connections\MySql;
use App\User\UserDatabase;

class Container{

    private $classInstances = [];
    private $builds = [];


    public function __construct()
    {
        $this->builds = [
            'userDatabase' => function(){
                return new UserDatabase($this->bulid('pdo'));
            },

            'pdo' => function(){
                $connection = new MySql();
                return $connection->db1();
            }
        ];
    }

    public function bulid($object){
        if(isset($this->builds[$object])){
            if(!empty($this->classInstances[$object])){
                return $this->classInstances[$object];
            }
            $this->classInstances[$object] = $this->builds[$object]();
        }
        return $this->classInstances[$object];
    } 

}