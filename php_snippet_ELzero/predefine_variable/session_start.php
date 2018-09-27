<?php

session_start();  //start session 

$_SESSION['username'] = 'osama';
$_SESSION['favFood'] = 'pizza';

echo "<a href='page2.php'>Room 2 </a> ";