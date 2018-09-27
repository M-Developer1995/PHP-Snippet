<?php
 $name = "Mohammed";
 $age = 23;
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo "Home page"; ?></title>
</head>

<body>
<h1><?php echo "heading"; ?> </h1>
<p> <?php echo "this is paragraph"; ?> </p>

<?php echo "
<h1>heading</h1>
<p>this is paragraph</p>";
?>

<?php echo "<h1 class=\"testing\">heading</h1>"; ?>
<?php echo "$name"; //print the vaue of varible ?> 
<?php echo $name; //print the vaue of varible ?> 

<?php echo '$name'; //print the value between qutation as it  ?>
</body>
</html>