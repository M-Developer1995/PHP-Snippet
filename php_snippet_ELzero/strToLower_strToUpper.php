<?php
/*
  strtolower(String)
  strtoupper(String)
  lcfirst(String) // first letter to lower case
  ucfirst(String) // first letter to upper case
  ucwords(String) // first letter of all words upper case
  
*/

$str = "HELLO I Love Php ";

$lower = strtolower($str);
$upper = strtoupper($str);

echo "To Lower Letters : " . $lower;
echo "<br>";
echo "To Upper Letters : " . $upper;
