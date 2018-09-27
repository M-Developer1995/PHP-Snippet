<?php

//Change site language
$siteLang = "English";
if ($siteLang == "English"){
   $var1 = "Hello";
   $var2  = "Everyone";

}elseif($siteLang == "Arabic"){
   $var1 = "اهلا";
   $var2  = "بالجميع";
}else{
   echo "Unknown Language";
  
}

//Change site Theme
$siteTheme = "Brown";
if($siteTheme == "Blue"){
  $css = "blue.css";
}elseif($siteTheme == "Brown"){
   $css = "brown.css";
}else{
 $css = "blue.css";
}

 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href = "<?php echo $css; ?>">
<meta charset="utf-8">
<title><?php echo "Home page"; ?></title>
</head>

<body>
<h1><?php echo $var1 . " " . $var2; ?> </h1>

</body>
</html>