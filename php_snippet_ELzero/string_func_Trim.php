<?php
/*
   trim(String, charList)
   ltrim(String, charList)
   rtrim(String, charList)
   \0 NULL
   \t Tab
   \n New Line
   \r Carriage Return
   \x0B Vertical Tab
   " " Space
*/

$str = "I Love PHP";

//echo var_dump($str) . "<br>";

//$str = "\x0B \x0B \x0B I Love PHP \x0B \x0B \x0B ";

//echo var_dump($str ) . "<br>";

//$Trimmed = trim($str);
//$Trimmed = ltrim($str);
//$Trimmed = rtrim($str);

//echo var_dump($Trimmed);

echo $str;

//$trim = trim($str, "I LP");
//$trim = ltrim($str, "I L");
$trim = rtrim($str, "P");
echo "<br>";
echo $trim;