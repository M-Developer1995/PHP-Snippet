<?php
/*
use to get variable from link 
   parse_str(String, Array)

*/

$link = "name=Mohammed&age=23&year=2018&skills=3&";

//parse_str($link);
parse_str($link, $info); // save it in associatie array

//echo $name;

echo "<pre>";
print_r($info);
echo "</pre>";

