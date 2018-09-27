<?php

/*
   array_rand(array , num)
*/

$array = array("Oama" , "Ali" , "Hassan" , "Mohammed" , "Omar");

$num = 4;
$randKey = array_rand($array ,$num); 

    echo "<pre>";
    print_r($array); //the Main Array
     print_r($randKey); //the rand Array
    echo "</pre>";

 for($i = 0 ; $i < $num ; $i++){
     echo $array[$randKey[$i]] . "<br/>";
 }