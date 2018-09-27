<?php

/*
  [ 1 ] Check if the dirctory is exists or no
  [ 2 ] Make dirctory
  [ 3 ] Assign to variable
  [ 4 ] Create File inside  this dirctory
  [ 5 ] Assign this file to variable
  [ 6 ] change mod of file to be read only
  [ 7 ] check file is writable
  [ 8 ] change mode of this file make it wriable
  [ 9 ] include this file
*/

if(file_exists(__DIR__ . '/PHP')){
     
     echo "This Dirctory is Exists";
}else {

    mkdir(__DIR__ . '/PHP');
}

$dirctory =__DIR__ . '/PHP/';

file_put_contents($dirctory . 'text.php', "hello");

$file = $dirctory . 'text.php';

chmod($file , 0444);

if (is_writable($file)){

    file_put_contents($file, "Hello");
}else{
    chmod($file , 0755);
    file_put_contents($file, "<?php echo 'Well Done !'; ");
}

