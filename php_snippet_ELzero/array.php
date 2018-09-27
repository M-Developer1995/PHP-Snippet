<?php

/*
   Array

   [ 1 ] Indexed Array
   Syntax 
    array(
        Element ,
        Element ,
        Element )

*/


/* $workers[] = "Ahmed"; 
$workers[] = "Osama"; 
$workers[] = "Ali"; 
$workers[] = "Omar";  */

//$langs = array("html", "Css3", array("JQuery", "Anguler", "Ajax"), "php", "ruby");

//$langs = array("html", "Css3", "JS", "php", "ruby");

/* echo "<ul>";

foreach($langs as $lang){
    echo "<li> " . $lang . "</li>";
}

echo "</ul>"; */



/* echo "<ul>";

for($lang = 0 ; $lang < count($langs) ; $lang++ ){

    echo "<li> " . $langs[$lang] . "</li>";
}

echo "</ul>"; */

///////////////////////////////////////////////////////////////////////////////////////////

/*
    [ 2 ] Assoceitive Array

    Syntax:

    array(
        "key"=>"value", 
        "key"=>"value", 
        "key"=>"value", 
        "key"=>"value" )

  Key   = most be  Uniqe ,  can hold String or Int , Can't hold array or object
  Value = can hold any data type and can be repeted
    
    Key :
   "10.6" = hold it as string 
   true  = as 1
   false = as 0
   NULL = as "" Empty
*/    

/* $langs = array(
    "html" => "60%", 
    "Css3" => "70%", 
    "JS"   => "60%", 
    "php"  => "80%", 
    "ruby" => "50%"
    );

$langs["Java"] = "70%";
echo "<ul>";

foreach($langs as $key => $value){

    echo "<li> " . $key . " => " . $value . "</li>";
}

echo "</ul>"; */

#############################################################################

/*

   [ 3 ] MultiDimensional Array

   Syntax:

   array(
       array(Element, Element),
       array(Element, Element),
       array(Element, Element),
       array(Element, Element)
   );

*/

  //Indexed Array MultiDimensional Array
/* $diet = array (
    array("Apple, Banana", "orange"),
    array("Meat", "Apple", "Egg"),
    array("Fish", "Apple"),
    array("Rice", "Apple"),
    array("Bread", "Apple", "Banana"),
    array( 
        array( "osama", "ahmed", "hassan" ),
        array( "omar", "khalid", "amar" )
        )
);

echo "<pre>";
print_r($diet);
echo "</pre>";

echo $diet[5][1][2]; */

///////////////////////////////////////////////////////////////

  //Assoceitive MultiDimensional Array

   $diet = array (
    "Day One"   => array("Apple", "Banana", "orange"),
    "Day Two"   => array("Meat", "Apple", "Egg"),
    "Day Three" => array("Fish", "Apple"),
    "Day four"  =>  array("Bread", "Apple", 
   /* array(
        "Salt"  => "10%",
        "Suger" => "20%"
    )*/ ) 
);

echo "<pre>";
print_r($diet);
echo "</pre>";

foreach($diet as $day => $food){
    echo "<h3>In " . $day . " I will Eat : </h3>";

    foreach($food as $item){
        echo "- " . $item . "<br>";
    }
}

//echo $diet["Day four"][2]["Salt"];