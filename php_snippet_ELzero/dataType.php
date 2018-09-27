<?php

$var1 = "I love php"; //Data type [1] String
$var2 = 100; //Data type[2] Integer
$var3 = TRUE; //Data type[3] Booleab
$var4 = 10.5; //Data type[4] Floation Point number AKA Double

$var5 = array(
    "A"=>"Val1",
    "B"=>"Val2",
    "C"=>"Val3"
);// Data type[5]Array

$var6 = NULL; //Data type [6]NULL

class Book {
    function Book(){
        $this->gener = "Advinture";
    }
}

$var7 = new Book(); //Data type [7] object

//$var8 = mysqli_connect("loalhost","root","13456","info"); // resource
$var8 = fopen("mohammed.txt","r"); // Data type[8] resource


//====Get type============
echo "<h1> Get type</h1>";
echo gettype($var1) . "<br/>";  
echo gettype($var2) . "<br/>"; 
echo gettype($var3) . "<br/>"; 
echo gettype($var4) . "<br/>"; 
echo gettype($var5) . "<br/>"; 
echo gettype($var6) . "<br/>"; 
echo gettype($var7) . "<br/>";  
echo gettype($var8) . "<br/>";   

//====Variable Dump========
echo "<h1> Variable Dump</h1>";
echo var_dump($var1) . "<br/>";  
echo var_dump($var2) . "<br/>";  
echo var_dump($var3) . "<br/>";
echo var_dump($var4) . "<br/>";
echo var_dump($var5) . "<br/>";
echo var_dump($var6) . "<br/>";
echo var_dump($var7) . "<br/>";
echo var_dump($var8) . "<br/>";
