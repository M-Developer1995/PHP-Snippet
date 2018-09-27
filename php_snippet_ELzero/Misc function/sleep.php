<?php
/* 
  sleep(Seconds)  // Delay time of Execuation
  usleep(MicroSeconds)  // Delay time of Execuation
  time_sleep_until(time() + 5)
*/





function checkFile(){ 
if(file_exists('osam.text')){

  echo 'Good file found ';
} else {

  sleep(5);
  checkFile();

}

}

echo checkFile();

