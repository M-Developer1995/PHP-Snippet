<?php

/*
  $variable = Value  // Case sensitve
  
*/

 $lessonName = "Concatenation";
 $homePage   = "PHP " . $lessonName;
 $heading    = "Welcome to " . $lessonName;
 $brief      = "This lesson tallk about " . $lessonName;
 $languages  ="<ul>";
 $languages  .="<li>PHP</li>";
 $languages  .="<li>CSS</li>";
 $languages  .="<li>JS</li>";
 $languages  .="</ul>";
 

 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $homePage; ?></title>
</head>
<h1><?php echo $heading; ?></h1>
<p><?php echo $brief; ?></p>

<h1>Languages i love </h1>
<?php echo $languages; ?>
<body>

</body>
</html>