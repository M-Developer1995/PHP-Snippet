<?php

/*
  date(format, timeStamps);  make format to time

*/

date_default_timezone_set('Africa/Cairo');

$nextMonth =  time() + (30 * 24 * 60 * 60); // 30days, day , minute, seconds == Month
$nextWeek =  time() +  (7 * 24 * 60 * 60); // 7days, day , minute, seconds == Month

echo date('y-m-d h:i:s', $nextWeek ) . '<br>';
/*
echo date('y-m-d h:i:s') . '<br>';

echo date_default_timezone_get();

*/