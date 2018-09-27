<?php

/*
pathinfo(path,option)

*/

$pathinfo = pathinfo(__FILE__, PATHINFO_DIRNAME);

echo "<pre>";
print_r($pathinfo);
echo "</pre>";