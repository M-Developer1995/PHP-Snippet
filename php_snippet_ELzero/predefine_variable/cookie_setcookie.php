<?php
/*
  setcookie(name, value, expier, path, domian,http)
  name : Name of the cookie
  value : Contenet of cookie 
  expire data : End data
  path : "/" Mean setcookie to full website
*/

setcookie('School', 'Test', time() + 86400,'/',TRUE,TRUE);  // stay for one day


if(count($_COOKIE) > 0 ){

    echo "Cookie is  Enable for this Site";
 
}else {

    echo "Please Enable Cookie For Best Browsing";
}

print_r($_COOKIE);