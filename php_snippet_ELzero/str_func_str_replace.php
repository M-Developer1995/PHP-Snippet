<?php
/*
  str_replace(Search, replace, String, Count) :Case Sensitive
  Search, replace : can be array
  Count :print how many replace done use variable
*/

///////////////////////// EASY WAY ////////////
/*
$str = "I love php Too Much because php is Good and easy language and php is famuse";
echo $str . "<br>";

$str2 = str_replace("php", "JS", $str, $i);

echo $str2 . "<br>";
echo "Replacement count = " . $i . "<br>";
*/

/////////////////// Advanced /////////////////////////////

/*
$str = "I love php Too Much because php is Good and easy language and php is famuse";
echo $str . "<br>";

/// Convrerted String  to Array
$str = explode(" ", $str);

echo "<pre>";

print_r($str );

echo "<pre>";

/// Replace in the array
$str  = str_replace("php", "JS", $str , $i);

echo "<pre>";

print_r($str );

echo "<pre>";

//Converted Array  to String
$str  = implode(" ", $str );

echo $str;
*/

///////////////////////////////////////////////////////////////////
/*
$str = "I-love|php@Too-Much@because-php=is-Good@and|easy@language=and|php-is-famuse";
echo $str . "<br>";

//$str  = str_replace(array("-", "@", "=", "|", "/"), " ", $str , $i);
$str  = str_replace(array("-", "@", "=", "|"), array("A", "B", "C","E"), $str , $i);
echo $str;
*/

$str = " Line1\n Line2\n Line3\n";
echo $str;