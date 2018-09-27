<?php
/*
  array_push(array, val1, val2, val3,....)  : Add values at the End of array
  array_unshift(array, val1, val2, val3,....)  : Add values at the Begin of array
*/
$langs = array(
    "html" => array(1,2), 
    "Css3", 
    "JQuery", 
    "Anguler", 
    "Ajax", 
    "php", 
    "10"
    );
    
    array_push($langs["html"], "ruby");

    echo "<pre>";
    print_r($langs);
    echo "</pre>";

    array_unshift($langs, "HTML5");

    echo "<pre>";
    print_r($langs);
    echo "</pre>";