<?php
/*

   Filter : use to security
   user input
   cookeis
   web service
   server variable
   dadtbase query result
 /////////////////////////////

 filter_var(Variable, Filter_type, options)

   
*/

foreach(filter_list() as $filter){
    echo $filter . '<br>';
}

?>

<form action='ch.php' method='POST'>
<input type='text' name = 'user'>
<input type='submit' value='Send'>
</form>