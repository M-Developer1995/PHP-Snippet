<?php

/*
   
    Logical Operators

    [ and ] Condition1 and condition2 and condition3
    [ &&  ] Condition1 and condition2 and condition3
    [ xor ] One condition is true but not all
    [ or  ] One condition is true or all
    [ ||  ] One condition is true or all
    [ !   ] Not

*/

$age = 30;
$skillYears = 5;
$haveCar = "yes";

if ($age > 20 && $skillYears > 3 && $haveCar == "yes" ) {

    echo "Acceptet";
}