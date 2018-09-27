<?php

/*
  substr_count(String, substring, start,length)
  substr_compare(String1, String2,StartPosition, Length, Case)
*/

$str = "I Love PHP So Much Because PHP is Famouse and Cool";

//$count = substr_count($str, "PHP", 9, 30 );
//$count = substr_count($str, "PHP");

//echo $count;

$str1 = "Hello Lohammed";
$str2 = "Mohammed";

echo substr_compare($str1, $str2, 6, true);

