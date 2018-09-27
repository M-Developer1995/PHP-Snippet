<?php

//start session
session_start();

$_SESSION['username'] = 'osama';

include 'counter.php';

echo "<a href='about.php'> About </a>";