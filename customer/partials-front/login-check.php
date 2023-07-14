<?php
// authorization or access control 
if(!isset($_SESSION['user'])){
    $_SESSION['no-login-msg']="<div class='error text-center'>Please login to access user panel</div>";
    header('location:'.SITE_URL.'customer/login.php');
}
?>