<?php
/*
  switch(condtion){
      case:
       // Code
      break;
  }
*/

$browser = "Chrome";

switch($browser){
    case "Firefox":
    case "Mozila Firefox":
    case "Mozila":
    echo "Your Favorite browser is Firefox";
    break;

    case "Google Chrome":
    case "Chrome":
    case "Chromium":
    echo "Your Favorite Browser is Google Chrome This is the best";
    break;

    case "Opera":
    echo "Your Favorite Browser is Opera";
    break;

    default:
    echo "Your Favorite Browser is Not Found";
    
}