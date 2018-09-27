<?php
/*
  substr(String, start, Length)
*/

$str   = "I Love PHP So Much Because PhP is Famouse and Cool";
//$piece = substr($str, 18, 12); // from beginnig
$piece = substr($str, -6, -4); // from end

echo $piece; 