<?php
/* 
  fseek(handle, index, whence)
  whence : default : SEEK_SET // from begin 
  SEEK_CUR  // from current position
  SEEK_END // from end to start using negtive index value


  Modes:
  r  : Read only from begining : file must be exists
  r+ : Read and Write from begining :file must be exists

  w  : Write only clear file content : Create file if not found
  w+ : Write and Read clear file content :Create file if not found

  a  : Write only : Write from end of file  : Create file if not found
  a+ :Write and Read : Write from end of file : Create file if not found

  x  : Write only : Create file if not found : if file found cause Error
  x+ : Write and Read  : Create file if not found : if file found cause Error

  */

$fileHandele = fopen('hassan.text', 'r+');

fseek($fileHandele, 2 ,SEEK_SET);
$write = fwrite($fileHandele, "a");

fseek($fileHandele, 8 ,SEEK_SET);
$write = fwrite($fileHandele, "z");