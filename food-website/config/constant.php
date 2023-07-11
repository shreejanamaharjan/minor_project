<?php

// start session 
session_start();

define('SITE_URL','http://localhost/food-website/') ;
define('LOCALHOST','localhost');
 define('DB_USERNAME','root');
 define('DB_PASSWORD','');
 define('DB_NAME','nepalifood');
 $conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error($conn));
 $db_select = mysqli_select_db($conn,DB_NAME) or die(mysqli_error($conn));
?>