<?php

if(empty($_SESSION['counter'])){
    $_SESSION['counter'] = 1;

}else{

    $_SESSION['counter']++;
}

echo '<div> You Viwed this page ' . $_SESSION['counter'] . ' Times </div>';