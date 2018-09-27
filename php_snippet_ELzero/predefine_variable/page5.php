<?php

//Resume Session
session_start();

//Unset session
session_unset();

//Session Destory
session_destroy();

print_r($_SESSION);