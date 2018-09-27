<?php

/*
    array_fill(start_index , element_num , value)
*/

//$array = array_fill(2 , 10 , "omar");
//$array = array_fill(2 , 10 , array("hassan","ali"));
$array = array_fill(2 , 10 , array_fill(3 , 5 , "mohammed"));

    echo "<pre>";
    print_r($array); //the Main Array
    echo "</pre>";