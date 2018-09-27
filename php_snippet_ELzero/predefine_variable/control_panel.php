<?php

session_start();

if(isset($_SESSION['user'])){

    echo 'Welcome ' .$_SESSION['user'] . ' You are Admin';

    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
}else{

    echo 'You are not permited to see this page ';
}