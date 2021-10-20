<?php
namespace App\User\MVC;

use ArrayAccess;

class UserModel implements ArrayAccess{

    // UserDatabase Splaten

    public $id;
    public $firstname;
    public $lastname;
    public $email;
    public $password;
    public $bio;

    // Functionen für das Interface ArrayAccess
    public function offsetExists($offset){}
    public function offsetGet($offset){
        return $this->$offset;
    }
    public function offsetSet($offset, $value){
        $this->offset = $value;
    }
    public function offsetUnset($offset){}
	
    // Beispiel Funtion
    public function hello(){
        return 'Hallo '.$this->firstname;
    }
}