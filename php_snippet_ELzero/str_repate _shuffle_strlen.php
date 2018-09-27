<?php

/*
   str_repeat(String, Repeat)
   str_shuffle(String)
   strlen(String)

*/

//$str = "Mohammed <br>";
$str = "Mohammed love php ";

//$str_repeate = str_repeat($str, 20);
//$str_shuffle = str_shuffle($str);
$str_length = strlen($str);

//echo $str_repeate ;
//echo $str_shuffle;

echo "String length = " . $str_length . "<br>";

if ($str_length < 20 ) {

    echo "String requierd to be more than 20 letters ";
}