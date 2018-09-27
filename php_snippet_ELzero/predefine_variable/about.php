<?php

session_start();

echo 'Hello ' . $_SESSION['username'] . ' How are You ?';

include 'counter.php';