<?php
/*
mkdir("Name") : Create Dirctory:Folder
rmdir("Name") : Delete Dirctory:Folder

is_dir(Name) : dirctory exists 
*/
$name = "Mohammed";

if(is_dir($name)){

    echo "Sorry the Dirctory" . $name . "  is found no need to create it ";

}else{

    mkdir($name); // Create Dirctory:Folder
    echo "The Dirctory" . $name . "  is create it ";
}


