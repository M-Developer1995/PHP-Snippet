<?php

/*
   For Loop

   for(Expresiob1 ; Expresion2 ; Expresion3){

       Statement to Execute;
   }

   Expresion1 = Initial Counter
   Expresion2 = Condition
   Expresion3 = increment or decrement

*/

//*************Advanced For Loop***************

$i = 1;  //Expresion1 = Initial Counter
for ( ; ; ){
    
    if( $i > 20){ // Expresion2 = Condition 
        break;
    }

    echo $i ."<br/> ";

    $i++; //Expresion3 = increment or decrement

}

//*********************************************

echo "<br/>"; echo "<br/>"; echo "<br/>";
//----------------Example 1---------------------------
for($i = 1 ; $i <= 10 ; $i++){

    echo $i . "<br/>";
}
echo "<br/>";

//------------------Example 2-----------------------

 $langs = array("html" , "Css" , "JS" , "Ruby", "php");

 echo "<ul>";

     for($i = 0 ; $i <  count($langs) ; $i++){

        echo "<li> ". $langs[$i]." </li>";
     }
 echo "</ul>";



//---------------------Example 3-----------------------------
echo "<br/>";
echo "<br/>";
?>

<select name= "years">
<?php

   for($year = 1900 ; $year <= 2018 ; $year++){ 

     echo "<option value = '$year'> ". $year . "</option>"; 
   }
?>
</select>