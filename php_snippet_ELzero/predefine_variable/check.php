<?php

//Start session
session_start();

$admin = array('Mohammed', 'Ahmed', 'Osama', 'Hassan');

if($_SERVER['REQUEST_METHOD'] == 'POST'){  //check request method

   $user = $_POST['username']; 
   
   
   if(in_array($user, $admin)){  // search in array
       // if is admin
       $_SESSION['user'] =  $user;  // add it to session

       echo 'Welcome ' . $_SESSION['user'] . 'You will be Redircted to control panel';

       header('REFRESH:5;URL=control_panel.php');  // redirected after 5 seconds
   }else{
        // if is not admin
       echo ' Sorry you are not admin , not permited to open control panel';

   }

}else{

    echo "Error : You can\'t Browse this page dirctory ";
}