<?php

/*

       Arithmetic Operators

       [ + ] Addition
       [ - ] Subtraction
       [ * ] Multplication
       [ / ] Division

       [ % ] Modulus
       [ ** ] Power
*/

$var1 = 100;
$var2 = 20;

// echo $var1 ** 2;

/*

     Assignment operators

     += , -= , *= , /=

*/

$var3 = 200;
$var4 = 100;

$var4 += $var3;

echo $var4;


/*

       Comparison Operators

       [ == ] Equal : same vaue     100 == "100" 
       [ != ] Not equal
       [ <> ] Not equal
       [ === ] Identical  : same vaue and data type
       [ !== ] Not Identical  : same vaue and data type
       [ < ] Less than
       [ <= ] Less than or equal
       [ > ] Larger than 
       [ >= ] Larger than or equal 
 
*/

$a  = 100;
$b  = 200;

if ($a == $b ){

    echo "True";
}else{

    echo "False";
}