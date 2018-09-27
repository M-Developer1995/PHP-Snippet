<?php
/*
  dirname(path) : folder name

  basename(path, suffix) : File name
*/

//echo __FILE__ ; // return the current dirctory and file

//echo dirname(__FILE__); // return the current dirctory

//echo __DIR__ ;  // return the current dirctory

//include dirname(__FILE__) . "/../inc/text.php";

echo basename(__FILE__ , ".php");
