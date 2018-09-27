<?php
/*
  str_word_count(String, Format, charList)
  Format : default = 0 return words number
  1 : return as array
  2 : return Associative array : key = word position  

*/

$str = "I love php so much & JavaScript"; // & : dont count it

echo $str . "<br>";

$wordCount = str_word_count($str, 0 , "&"); // & :Count it as Word
//$wordCount = str_word_count($str, 1, "&");
//$wordCount = str_word_count($str, 2, "&");

//echo $wordCount;

echo "<pre>";
print_r($wordCount);
echo "</pre>";