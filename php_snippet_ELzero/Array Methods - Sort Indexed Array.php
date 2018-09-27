<?php
/*
    sort(array, sorting type) 
    SORT_REGULAR :BY DEFAULT = SORT_REGULAR

    rsort(array, sorting type) 
    r = Reverse
*/

$langs = array(
    "html" , 
    30,
    "Css3",
    10, 
    "JQuery", 
    "Anguler", 
    "Ajax", 
    20,
    "php" ,
    15
    );
    

 
    echo "<pre>";
    print_r($langs); //Main Array
    echo "</pre>";

    //sort($langs, SORT_STRING);
    //sort($langs, SORT_REGULAR);
    
    //sort($langs, SORT_REGULAR);
    rsort($langs, SORT_STRING);

    echo "<pre>";
    print_r($langs); //Main Array after Sort
    echo "</pre>";

