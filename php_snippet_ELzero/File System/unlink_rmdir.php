<?php
/*
   unlink(file,context); delete file
   rmdir(Dirctory,context) delete Dirctory
*/

$file = 'omar.text';
if( file_exists($file && is_writable($file ))){
    unlink($file);
    echo "File Deleted";
}else {

    echo "Sorry file is not writable , make it writable and deleted ";
    chmod($file,0755);
    unlink($file);
}

