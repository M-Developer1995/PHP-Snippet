<?php

/* Verrrrry Important 
   explode(sperator , string , limit) : split string into array
   sperator : " " or ","
   limit : positive , negitive , zero
*/

$str = "Widget,Header,Footer,Clock";

echo $str . "<br/>";

$arr = explode("," , $str, 9);
//$arr = explode("," , $str, -2 );  // ignore the element


echo "<pre>";

print_r($arr);

echo "<pre>";

for($i = 0 ; $i < count($arr) ; $i++){

    echo "<link rel='stylesheet' href='css/ ". $arr[$i] .  ".css' />";
}

