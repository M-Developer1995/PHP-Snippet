<?php
/* 
  scandir(Dirctory, sort, context)
*/

$link = __DIR__ . "/osama";

$files = scandir($link,SCANDIR_SORT_NONE);

echo "<pre>";

print_r($files);

echo "</pre>";

foreach($files as $file){

    if(is_file($link . '/' . $file)){

        unlink($link . '/' . $file) ;
       
    }
    
}