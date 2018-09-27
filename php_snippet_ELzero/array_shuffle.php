<?php

/*
   array_reverse(array , preserve) : no sorting

   preserve : default value False : Optional 
   True: save the index 

   shuffle(array)
*/

$langs = array(
    "html", 
    "Css3", 
    "JQuery", 
    "Anguler", 
    "Ajax", 
    "php",    
    );

    echo "<pre>";
    print_r($langs); //the Main Array
    echo "</pre>";

    //$reversed = array_reverse($langs , false);
   //$reversed = array_reverse($langs , true);

   shuffle($langs);

    echo "<pre>";
    //print_r($reversed); //the Main Array after reversed
    print_r($langs); //the Main Array after reversed
    echo "</pre>";