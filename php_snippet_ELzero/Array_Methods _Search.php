<?php

$langs = array(
    "html" => "Hypertext Markup Language", 
    "Css3", 
    "JQuery", 
    "Anguler", 
    "Ajax", 
    "php", 
    "10"
    );

    /*
        in_array(needle , haystack ,type);

        type  = by default False
        false = not identical
        true  = identical
    */

   if ( in_array(10, $langs, true )){

       // echo "Yes its Found";
    } else {
       // echo "Not Found";
    }
/////////////////////////////////////////////////////////////////
/*
        array_search(needle , haystack ,type);

        type  = by default False
        false = not identical
        true  = identical
    */

    $lan = array_search("html", $langs, true);
    //echo $langs[$lan] . " It Found in Index : " . $lan;
  /////////////////////////////////////////////////////////////////////////
  /*
        array_key_exists(needle , haystack);

    */

    if(array_key_exists("html", $langs)){

        echo "Key Found : " . $langs["html"];
    }else{
        echo "Key NOT Found ";
    }