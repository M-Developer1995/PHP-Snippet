<?php

/*
  array_sum(array) : Ignore String : sum the value

  */

 // $array = array(20 , 30 , 45);
 // $array = array(20 , 30 ,"omar" ,1.5, 45);

 $array = array(
     "num1" => 20,
     "num2" => 50,
     "num3" => 30,
     "name" => "hassan"
     
 );

  $sum = array_sum($array);

    echo "<pre>";
    print_r($array); //the Main Array
    echo "</pre>";

    echo $sum;
  
