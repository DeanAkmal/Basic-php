<?php
 require_once "Animal.php";
 class Frog extends Animal 
 {
    public function __construct ($name, $legs, $cold_blooded,)
    {
        $this -> name = $name;
        $this -> legs = $legs;
        $this ->cold_blooded = $cold_blooded;
    }

    public function jump ()
    {
        echo "HOP HOP";
    }
 }
?>