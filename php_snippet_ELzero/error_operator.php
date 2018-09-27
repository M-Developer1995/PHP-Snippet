<?php

/*
    [ @ ] Error Control Operator use to Ignore the error and set custome  error message
*/

//$var = @fopen("omar" , "r") or die("the file not found");   // Ignore the error 

//(@include("incre.php")) or die("This file is not here");

$server = "localhost";
$user   = "root";
$pass   = "";
$db     = "info";

@mysqli_connect($server , $user , $pass , $db) or die("Something wrong happen , Check connection");