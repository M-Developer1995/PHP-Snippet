<?php

//Resume session
session_start();

echo "Hello " . $_SESSION['username'] . " How are you ?" . "<br/>";

echo "Your Favrite Food is " . $_SESSION['favFood']  . "<br/>";

echo "<a href='page3.php'>Room 3 </a> ";