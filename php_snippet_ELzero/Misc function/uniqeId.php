<?php
/*
   uniqid(prefix,more entropy)  :uniqe identifer
   more_entropy : mean more random
*/

$str = uniqid('script1_', true);

echo $str;

var_dump($str);