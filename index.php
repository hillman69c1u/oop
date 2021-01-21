<?php

require_once('animal.php');
require_once('ape.php');
require_once('frog.php');

$sheep = new Animal("shaun");

echo "Name : $sheep->name <br>"; // "shaun"
echo "Legs : $sheep->legs <br>"; // 2
echo "Cold blooded : $sheep->cold_blooded <br><br>";// false

$sungokong = new Ape("kera sakti");
echo "Name : $sungokong->name <br>"; // "kera sakti"
echo "Legs : $sungokong->legs <br>"; // 2
echo "Cold blooded : $sungokong->cold_blooded <br>";// false
echo "Yell : ";
$sungokong->Yell(); // "Auooo"

$kodok = new Frog("buduk");
echo "Name : $kodok->name <br>"; // "buduk"
echo "Legs : $kodok->legs <br>"; // 4
echo "Cold blooded : $kodok->cold_blooded <br>";// false
echo "Jump : ";
$kodok->Jump(); // "hop hop"

?>