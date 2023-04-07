<?php 
include_once("animal.php");
include_once("frog.php");
include_once("ape.php");

$hewan = new Animal("Shaun");
echo "Name : " .$hewan->name ."<br>";
echo "Legs : " .$hewan->legs ."<br>";
echo "Cold Blooded : " .$hewan->cold_blooded ."<br> <br>";

$kodok = new Frog("Buduk");
echo "Name : " .$kodok->name ."<br>";
echo "Legs : " .$kodok->legs ."<br>";
echo "Cold Blooded : " .$kodok->cold_blooded ."<br>";
echo "Jump : " .$kodok->jump ."<br> <br>";

$dewa = new Ape("Kera Sakti");
echo "Name : " .$dewa->name ."<br>";
echo "Legs : " .$dewa->legs ."<br>";
echo "Cold Blooded : " .$dewa->cold_blooded ."<br>";
echo "Yell : " .$dewa->yell;
?>