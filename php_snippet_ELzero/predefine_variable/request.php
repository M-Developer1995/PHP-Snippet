<?php

/*

  get Data as post and get 

  Send Data To the Same Page !!!!!!!!!
*/
?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

<input type="text" name="username">
<input type="submit" value="SEND">

</form>

<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){

//echo "Good your using POST to Process Data ";
//echo $_SERVER['REQUEST_METHOD'];

echo $_REQUEST['username'];
}


