<?php

$input = $_POST['test'];

// Saintize the input
$goodInput = filter_var($input, FILTER_SANITIZE_NUMBER_INT);  // Remove any string

// print input
//echo 'Main Input = ' . $input . "<br>";

echo 'Input after Saintize = ' . $goodInput . '<br>';

//Check for the result
if(filter_var($goodInput, FILTER_VALIDATE_INT) !== FALSE){  // check 

    echo 'Good';

}else{

    echo 'Bad';
}