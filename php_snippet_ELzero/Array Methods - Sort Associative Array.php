<?php

/*
     asort(array, sorting type)  : sort the value
     arsort(array, sorting type) : sort the value 

     ksort(array, sorting type)  : sort the Key
     krsort(array, sorting type) : sort the Key 
*/

$langs = array(
    "Html"    => 80 , 
    "Css3"    => 70,
    "JQuery"  => 60, 
    "Anguler" => 50, 
    "Ajax"    => 40, 
    "Php"     => 90 
    );
    

 
    echo "<pre>";
    print_r($langs); //Main Array
    echo "</pre>";

    ksort($langs ,SORT_REGULAR);

    echo "<pre>";
    print_r($langs); //Main Array after sort
    echo "</pre>";