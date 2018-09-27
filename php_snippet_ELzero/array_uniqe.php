<?php
/*

array_unique(array , SortingType)

*/

$array = array("Osama" , "Osama" , "Ahmed" , "Sayed" , "Ahmed");
$Unique = array_unique($array);

    echo "<pre>";
    print_r($array); //the Main Array
    echo "</pre>";

    echo "<pre>";
    print_r($Unique); //the unique Array
    echo "</pre>";