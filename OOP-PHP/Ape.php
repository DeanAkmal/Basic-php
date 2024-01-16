<?php 
    require_once("Animal.php");
    class Ape extends Animal {
        public function __construct ($name, $legs, $cold_blooded, )
        {
            $this -> name = $name;
            $this -> legs = $legs;
            $this ->cold_blooded = $cold_blooded;
            
            
        }
        public function yell () {
            echo "Auoooo";
        }
    }

?>