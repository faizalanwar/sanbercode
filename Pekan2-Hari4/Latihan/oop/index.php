<?php 
require ('Animal.php');
require ('Frog.php');
require ('Ape.php');


$sheep = new Animal("shaun");
echo "Name : ".$sheep->name."<br>"; // "shaun"
echo "Leg  : ".$sheep->legs."<br>"; // 2
echo "cold blooded  : ".$sheep->cold_blooded."<br><br>" ; // false


$sungokong = new Ape("kera sakti");
echo "Name : ".$sungokong->name."<br>"; // ""kera sakti"
echo "Leg  : ".$sungokong->legs."<br>"; // 2
echo "cold blooded  : ".$sungokong->cold_blooded ."<br>"; // false
echo "yell : ";
echo $sungokong->yell()."<br><br>" ;// "Auooo"


$kodok = new Frog("buduk");
echo "Name : ".$kodok->name."<br>"; // "buduk"
echo "Leg  : ".$kodok->legs."<br>"; // 4
echo "cold blooded : ".$kodok->cold_blooded."<br>" ; // false
echo "jump : ";
echo $kodok->jump() ."<br>"; // "hop hop"
?>
