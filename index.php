<?php

//Steg 1: ange lämpliga headers
header("Content-Type: application/json; charset=UTF-8");

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Referrer-Policy: no-referrer");

//Steg 2: Skapa arrayer
$firstNames = ["Kristina","Annika","Berit","Rickard","Lucas","Anette","Ebba","John","Birgit", "Lennart"];
$lastNames = ["Mårtensson","Andreasson","Blom","Gustafsson","Ekström","Ivarsson","Björklund","Månsson","Lind", "Lindqvist"];

//Steg 3: Slumpa fram 10 namn och spara i ny array
$names = array();

for($i =0 ; $i<10 ; $i++){
  $name = array(
    "firstname"=>$firstNames[rand(0,8)], //firstname är key, firstname[rand] är värdet
    "lastname"=>$lastNames[rand(0,8)] //[rand] slumpar fram ett värde från de tidigare arrayerna
  );

  array_push($names, $name);
}


//Steg 4: Konvertera till JSON
$json = json_encode($names, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

//Steg 5: Skicka JSON till klienten
echo $json; //OBS!! Absolut ingen html-kod