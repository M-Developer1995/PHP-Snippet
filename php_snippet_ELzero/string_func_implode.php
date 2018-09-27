<?php

/*
   implode(seperator , array); from array to string 
   join(seperator , array);  : Alias of implode 

   seperator : default value = ""
*/

$array = array("Ahmed", "mohammed", "Osama");

//$str = implode(" and ", $array);
$str = join(" and ", $array);

echo "Hello our Mangers " . $str;
