<?php
/* 
  String Compare
  strcmp(String1, String2) : Case Sensitive
  
  strncmp(String1, String2, Lemgth) : Case Sensitive
  0   : the two strings ar equel
  > 0 : String1 Greater than String2
  < 0 : String1 Less than String2
*/

$str1 = "PHP1";
$str2 = "PHP";

echo strcmp($str1, $str2);
echo "<br>";
/*
  strrev(String)
*/

$str3 = "Mohammed";

echo strrev($str3);