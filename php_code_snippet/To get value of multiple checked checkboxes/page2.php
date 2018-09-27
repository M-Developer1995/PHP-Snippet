<?php

if(isset($_POST['submit'])){
    
    if(!empty($_POST['vehicle_list'])){

        foreach($_POST['vehicle_list'] as $vec){

            echo $vec . '<br>';
        }
    }
    
    echo "<pre>";
    print_r($_POST['vehicle_list']);
    echo "</pre>";
}