<?php

$driverLicences_endDate = 2022;
$currentDate            = 2022;

if ($currentDate < $driverLicences_endDate ){

   echo "Your Driver Licenes is Valid until " . $driverLicences_endDate;

} elseif($currentDate > $driverLicences_endDate) {

   echo "Your Driver Licenes is inValid " ;

}else{
    echo "Your Driver Licenes is Valid for one year ";
}

/*

if(Condition){
    Code to Run if Condition is True
}elseif(Condition){
    Code to Run if Condition is True
}else {
    Code to Run if Condition is False
}

*/