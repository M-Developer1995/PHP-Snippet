<?php

$mainColor = '#FFF';  //Main Color

//setcookie('background', " ", time() - 3600,"/");   //  Cookie data Expire 

if ($_SERVER['REQUEST_METHOD'] == "POST"){  // Check Method Type

   $mainColor = $_POST['color']; // get the color from the form
   setcookie('background', $mainColor, time() + 3600,"/");   // Set Cookie

}

// Check if Cookie is SEt 
if (isset($_COOKIE['background'])){

    $body = $_COOKIE['background'];  // Change color

} else {

    $body = $mainColor;  
} 


?>

<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title>Modify Cookies</title>
</head>

<body style="background-color:<?php echo $body ; ?>">
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
     <input type="color" name="color">
     <input type="submit" value="Chose">

     </form>
</body>

</html>   