<?php
/*

  array_pop(array)   : return the last value in array
  array_shift(array) : return the first value in array

*/
$langs = array(
    "html" , 
    "Css3", 
    "JQuery", 
    "Anguler", 
    "Ajax", 
    "php" 
    );
    

 
    echo "<pre>";
    print_r($langs);
    echo "</pre>";
    
    $firstLang = array_shift($langs);
    $lastLang = array_pop($langs);

    echo "<pre>";
    print_r($langs);
    echo "</pre>";

    echo   "First Lang " . $firstLang . "<br/>";
    echo  "Last Lang "   . $lastLang  . "<br/>";
