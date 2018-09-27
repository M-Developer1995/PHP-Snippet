<?php
$input =  $_POST['user'];

//echo filter_var($user, FILTER_SANITIZE_STRING);

/*
if ( filter_var($input, FILTER_VALIDATE_INT) !== FALSE){

    echo 'Good the ' . $input . 'you enterd is Intger';
}else {
    echo 'Sorry the ' . $input . 'you enterd is Not Intger';
}
*/

/////////////Advanced///////////

/*
$option = array(
    'options' => array( 'min_range' => '1', 'max_range' => '999' ),
    //'flags' =>

);
*/

if ( filter_var($input, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 ) !== FALSE){

    echo 'Good the ' . $input . 'you enterd IS ip v4';
}else{
    echo 'Sorry the ' . $input . 'is not IP V4';
}