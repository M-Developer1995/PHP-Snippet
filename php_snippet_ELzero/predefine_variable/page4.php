
<?php
//Resume session
session_start();

$_SESSION['favFood'] = 'Chicken';

echo "Your Favrite Food Now is " . $_SESSION['favFood']  . "<br/>";

echo "<a href='page5.php'>Exit </a> ";

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

