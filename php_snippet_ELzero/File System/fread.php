<?php
/* 
  fread(handle, Length)
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

$fileHandele = fopen('hassan.text', 'r');
$fileSize    = filesize(__DIR__ . "/hassan.text");
$content     = fread($fileHandele, $fileSize);

echo $content;

