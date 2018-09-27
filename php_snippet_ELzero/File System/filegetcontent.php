<?php
/* 
  file_get_contents(path, include path, context,offset[index], maxLen)
*/

$str = file_get_contents('Mohammed.text',false,NULL,6,9);

file_put_contents('write.text',$str);