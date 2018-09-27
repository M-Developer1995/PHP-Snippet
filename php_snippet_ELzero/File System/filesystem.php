<?php
/*
   file_exists($file)
   is_writable($file)
*/

//echo dirname(__FILE__); // give the dirctory

//$file = 'C:\xampp\htdocs\php_snippet_ELzero\File System\osama.txt';
/*
$file = 'Mohammed.txt';

if(file_exists($file)){

    echo "Good the File [ ". $file . " ] is Found ";

    file_put_contents($file, "Added with file put content");

}else{

    echo "Sorry the File [ ". $file . " ] is Not Found but i created by PHP !!";
    file_put_contents($file, "Added with file put content");

}
*/

$file = 'Mohammed.txt';  // permission Read only in proprties of file

if(is_writable($file)){

    echo "Good the File [ ". $file . " ] is Writable ";

    file_put_contents($file, "File is Writable");

}else{

    echo "Sorry the File [ ". $file . " ] is Not Writable !!";
    file_put_contents($file, "Added with file put content");

}


