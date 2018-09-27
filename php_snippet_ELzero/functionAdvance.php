<?php

/*
   Function Advanced
  

   [ 1 ] function with argument
   [ 2 ] function inside function
   [ 3 ] if , else Condition
   [ 4 ] comperison operator
   [ 5 ] concatination
  */

function getTicket($user , $age){

    $ticket = rand(1000 , 10000); // rand function

    if ($age >= 30){

        $msg  = "Hello " . $user . " Your age is " . $age . "<br>";
        $msg .= "You are Qulified to get ticket Congrats :)" . "<br/>";
        $msg .= "Your Ticket ID is : [ <span> " . $ticket . "</span> ]";

    }else {

        $msg  = "Hello " . $user . " Your age is " . $age . "<br>";
        $msg .= "You are NOT Qulified to get ticket Sorry :(" . "<br/>";

    }

    return $msg;
}

$id = getTicket( "Mohammed" , 31);

/////////////////////////////////////////////////////////////////////
function makeFrame( $element ){

    $frame  = "<div class='nice-frame'>";
    $frame .= $element ;
    $frame .= "</div>";

    return $frame;
}

//$myElement = makeFrame( $id );
$myElement = makeFrame( getTicket( "Mohammed" , 33) );  

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Advanced Function</title>

<meta charset = "utf-8">

<style>
     .nice-frame{
         padding: 10px;
         text-align:center;
         width:400px;
         margin:20px auto;
         border-radius:10px;
         background-color:#EEE;
         border:1px solid #CCC;
         font-family:Tahoma , Arial;  
         line-height:2;
     }

     .nice-frame span{
         font-weight:bold;
         color:blue;
     }
</style>
</head>

<body>
    
    <?php echo $myElement ; ?>
    
</body>
</html>

