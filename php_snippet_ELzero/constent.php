<?php

/* 
Syntax : define(name , value , case_insensitive)
case_insensitive : By default FALSE
*/

define("SITE_STSTUS","off");

if(SITE_STSTUS == "ON"){ 

$firstName = "Osame"; 
echo $firstName . "<br/>"; //Variable can redefine

define("FIRST_NAME" , "Osama" , true);
echo FIRST_NAME ; // Constent can not redefine

// const FIRST_NAME = "Osama"; // constent can not redefine

echo "<br/>";

echo PHP_INT_MAX . "<br/>";
echo __FILE__ . "<br/>";
echo __DIR__ . "<br/>";
echo __LINE__ . "<br/>";

} else {
    echo "Site closed for Maintance !!!";
}