<?php
/*
   file_put_contents(File, data, mode, context)

   Mode :
   FILE_APPEND
   LOCK_EX : available for one user
   FILE_USE_INCLUDE_PATH


*/

file_put_contents('Mohammed.text', ' Every One', FILE_APPEND | LOCK_EX );