<?php

/*
   For Each

   Syntax [ 1 ] for indexed Array

   foreach($array as $value){
         // Statement to excute
   }

    Syntax [ 2 ] for Associtive Array

    foreach($array as $key => $value){
           // Statement to excute
    }

*/

/*
///////-------Indexed Array----------
$countries = array("Sudan" , "Qatar" , "Oman" , "Dubai" , "UK" , "USA" , "UAE");

foreach($countries as $values){

    echo $values. "<br/>";
}
*/

///////-------Associtive Array----------
$countries = array(
    "SU" => "Sudan" ,
    "QA" => "Qatar" , 
    "OM" => "Oman" ,
    "DU" => "Dubai" ,
    "UK" => "United Kindom");

foreach($countries as $key => $value){

    echo $key . " => " . $value . "<br/>";
}