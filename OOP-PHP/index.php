<?php
  
  require_once("Animal.php");
  require_once ("Frog.php");
  require_once ("Ape.php");

  $sheep = new Animal("Shaun",4,"no") ;
  echo "Name :" . $sheep->name . "<br>";
  echo "Legs :" . $sheep->legs . "<br>";
  echo "Cold Blooded: " . $sheep->cold_blooded . "<br><br>";

  $kodok = new Frog ("Buduk",4,"no") ;
  echo "Name :" . $kodok->name . "<br>";
  echo "Legs :" . $kodok->legs . "<br>";
  echo "Cold Blooded: " . $kodok->cold_blooded . "<br><br>";
  echo "Jump:" . $kodok -> jump() . "<br>";

  $sungokong = new Ape ("Kera Sakti",2,"no");
  echo "Name :" . $sungokong->name . "<br>";
  echo "Legs :" . $sungokong->legs . "<br>";
  echo "Cold Blooded: " . $sungokong->cold_blooded . "<br>";
  echo "Yell" . $sungokong -> yell();
  
?>