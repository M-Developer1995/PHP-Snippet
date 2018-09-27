<?php

/*
     strpos(String, Find, offset or index = 0) : case sensitive
     stripos(String, Find, offset or index = 0) : case in-sensitive  
     strrpos(String, Find, offset or index = 0) : begin from right &  case sensitive
     strripos(String, Find, offset or index = 0) : begin from right &  case in-sensitive
     
*/

$str = "I Love PHP So Much Because PHP is Famouse And Cool";

//$pos = strpos($str, "PHP", 8);
//$pos = stripos($str, "php", 8);
//$pos = strrpos($str, "PHP", -8);
$pos = strripos($str, "php", -8);

echo $pos;