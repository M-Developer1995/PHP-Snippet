<?php

/*
   strtotime(String, timestamp[now])

   String[Date]:
   now
   +20 day  //any number
   +12 month //any number
   +5 year   //any number

*/

date_default_timezone_set('Africa/Cairo');

//$time = strtotime('now', time() - 3600 ); // hour before

//$time = strtotime('now'); 
//$time = strtotime('+2 week 3 day 2 hours'); 

//$time = strtotime('next Monday'); 

$time = strtotime('last Monday'); 


echo date('y-m-d h:i:s', $time) . '<br>';
