<?php

/*
   addslashes(String)  // Add Slashes to skip
   stripslashes(String) // Clean From Slashes
   strip_tags(String, Allow_tags)
*/

/*
$str = "I will go at six o'clock";

echo $str . "<br>";

$skipped = addslashes($str);

echo $skipped . "<br>";

$clean = stripslashes($skipped);

echo $clean; */

////////////////////////////////////////////////////////////
$str2 = "I love <b> php </b> go to <a href='php.net'>php.net </a> To <i>learn</i> php";

echo $str2;
echo "<br>";

$striped = strip_tags($str2, "<a><i>");

echo $striped;