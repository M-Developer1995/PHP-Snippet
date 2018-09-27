<?php
/*
  super global  // Accecable from any Scope



*/

// Glbal Scope 
//$name = "osama";
//echo $name;



function test(){
    //Function Scope
   $GLOBALS['name'] = "Hassan";
}

test();
//echo $name;

