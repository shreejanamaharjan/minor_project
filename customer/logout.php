

<?php
include('../config/constant.php');
 
 

// destroy the session 
session_destroy();

// redirect to login page 
header('location:'.SITE_URL.'customer/login.php');
?>