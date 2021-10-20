<?php

namespace App\App\AbstractMVC;
use ArrayAccess;

class AbstractModel implements ArrayAccess{
        // Functionen für das Interface ArrayAccess
        public function offsetExists($offset){
            isset($this->offset);
        }
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