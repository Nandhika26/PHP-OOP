<body style="font-family: Arial, sans-serif";>

<?php
require 'animal.php';
require 'frog.php';
require 'ape.php';

/// Sheep
$sheep = new animal();
$sheep->setName("Shauun");
echo "Name: ".$sheep->getName(). "<br>";
echo "Legs       : ".$sheep->legs. "<br>";
echo "Cold bloonded : ".$sheep->cold_blooded()."<br><br>";

///Kodok
$kodok = new frog();
$kodok -> setName("Buduk");
echo "Name: ".$kodok->getName()."<br>";
echo "Legs  : ".$kodok->legs."<br>";
echo "Cold bloonded : ".$kodok->cold_blooded()."<br>";
echo "Yell : ".$kodok -> jump()."<br><br>";

///sungokong/kera
$sungokong = new ape();
$sungokong -> setName("Sungokong");
echo "Name: ".$sungokong->getName()."<br>";
echo "Legs : ".$sungokong->legs()."<br>";
echo "Cold bloonded : ".$sungokong->cold_blooded()."<br>";
echo "Yell : ".$sungokong->yell();
