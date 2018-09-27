<?php

/*
  date(format, timeStamps);  make format to time

*/

date_default_timezone_set('Africa/Cairo');

//echo 'Copyright to M.Shawer &copy; 2015 - ' . date('Y') . '<br>' ;

/*
echo 'This day ' . date('d') . '<br>' ;
echo 'This day ' . date('d') . '<br>' ;
*/

//echo date('Y-m-d \of h:i:s ');

/*
$time = time() + ( 9 * 24 * 60 * 60);

echo date('jS', $time); 
*/
$afterSixMonth = time() + ( 180 * 24 * 60 * 60);
echo date('l jS \of F Y h:i:m pm', $afterSixMonth);