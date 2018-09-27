<?php
/*
    copy(oldfile,newfile) // use with just copy file
    rename(oldname, newname, context) // use with file and dirctory
*/


if (!copy('Mohammed.text', 'Mohammed_new.text')){

    echo "Sorry File Not Copy";
}else{

    echo "File is Copy";
}

function copyMe($extension){

    $orignial = __FILE__;

    return copy($orignial , $orignial . "." . $extension);
}


//copyMe("bak");

//rename('hello_new.text', 'new.text');