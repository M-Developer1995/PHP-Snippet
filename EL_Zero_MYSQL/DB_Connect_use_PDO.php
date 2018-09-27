<?php
 
 /*
   PDO
   parameter :
   $dsn :data source name
   $user
   $pass

   option:

 */

 $dsn  = 'mysql:host=localhost;dbname=elzero;';
 $user = 'root';
 $pass = '';

 $option = array(

  PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', // Solve arabic Problem
 );

 try{

    $db = new PDO($dsn, $user, $pass, $option); //Start new connection with PDO class
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "INSERT INTO orders (order_id, price, client_id) VALUES ('8', '1000', '2');";
    $db->exec($query);

    echo "Data Inserted Done";

 } 
 catch(PDOException $e){

      echo 'Failed' . $e->getMessage();
 }