<?php

/*
  While Loop

  while(Expresion1){

      //Statement to execute

      Expresion2 = increment
  }

  Expresion1 = Condition
  Expresion2 = increment
*/

$i = 1;

while ($i < 10 ){  //  Expresion1 = Condition

    echo $i ." <br/>";

    $i++;  //  Expresion2 = increment
}

//---------------------------------------------------
$a = 1;

while ($a < 10 ):  //  Expresion1 = Condition

    echo $a ." <br/>";

    $a++;  //  Expresion2 = increment
endwhile;