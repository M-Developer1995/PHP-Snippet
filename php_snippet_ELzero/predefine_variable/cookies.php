<?php
/*
   Cookie  : Identify the user 

*/

setcookie('Zero', 'Test', time() + 3600, "/");

if(count($_COOKIE) > 0 ){

    echo "Cookie is  Enable for this Site";
 
}else {

    echo "Please Enable Cookie For Best Browsing";
}