<?php

/*
   Function

   function functionName(arg1 , arg2 , arg3 , .....){
       //Function Body

       return;  //Stop Execute anything after it

       echo "hello" ; // Not Work
   }

   key word  = Function
   Identfier = functionName // not-case sensitive
   Parameter = arg1 , arg2 , arg3 , .....

   functionName(arg1 , arg2 , arg3 , .....); // Call function

*/

function sayHello( $name , $age ){

    echo "Hello " . " " . $name . " How are you ?" . "<br>";
    echo "your age is " . $age;
}

//*****************************************************************

function calculateSalaryInDays( $name , $days){

    echo "Hello " . $name . " your salary is " . ($days * 100 ) . "<br/>";
}

########################################################################

function gnerateYears( $From , $To ){

    echo "<select name = 'Yaers'>";

    for($year = $From ; $year <= $To ; $year++){

        echo "<option value = '$year'>" . $year . "</option>"; 
    }

    echo "</select>";
}

////////////////////////////////////////////////////////////////////

function calculateYourAgeInDays( $name , $age ){
    echo "Hello " . $name ;
    echo "<br/>";
    echo "your Age in Days is " . $age * 365 ;
    echo "<br/>";
}

//////////////////////////////////////////////////////////////////

function sayHi1(){

}

function sayHi2(){
    echo "Hello";
}

function sayHi3(){
    return;
}

function sayHi4(){
    return NULL;
}

//var_dump(sayHi1() , sayHi2() , sayHi3() , sayHi4());

//////////////////////////////////////////////////////////////////////////////////////

function calculateAge($age){
    $result = $age * 365;

    return $result;
}

//echo calculateAge("22");

//////////////////////////////////////////////////////////////////////////////

// Return VS Echo

$views = 150;

function increaseViews( $views ){

    return $views + 1;

}

echo increaseViews($views);