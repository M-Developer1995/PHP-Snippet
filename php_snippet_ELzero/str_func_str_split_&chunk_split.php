<?php
/*
   str_split(String , Length)  : from splite string to array
   Length :by default = 1 letter

*/

$str = "Hello I Love Php";

echo $str;

$ar = str_split($str, 10);

echo "<pre>";
print_r($ar);
echo "</pre>";

echo "<br>"; echo "<br>"; echo "<br>"; echo "<br>";

/*
   chunk_split(String , Length, end)  : Split the string 
   Length :by default = 76 letter
   end : defult value \r\n
   
*/

$str2 = "Hello I Love Php";

echo $str2;
echo "<br>";
 echo "<br>";

$ar2 = chunk_split($str2, 3, " @ ");

echo $ar2;