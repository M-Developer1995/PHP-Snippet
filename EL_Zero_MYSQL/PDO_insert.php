<?php
 
 /*
   PDO
   parameter :
   $dsn :data source name
   $user
   $pass

   option:
   
 */

 $dsn  = 'mysql:host=localhost;dbname=products;';
 $user = 'root';
 $pass = '';

 try{

    $db = new PDO($dsn, $user, $pass); //Start new connection with PDO class
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "You are Connect it ";

 } 
 catch(PDOException $e){

      echo 'Failed' . $e->getMessage();
 }