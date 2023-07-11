<?php
include('../config/constant.php');
// get the ID of admin to be deleted 
$id = $_GET['id']; 
// create sql query to delte 
$sql = "delete from nepali_table where id=$id";

// excute the query 
$res = mysqli_query($conn, $sql);

// check whether the query excuted successfully or not 
if($res==TRUE){
    // create session variable to display msg 
    $_SESSION['delete'] = "<div class='success'>order deleted sucessfully</div>";
    header('location:'.SITE_URL.'admin/order.php');
}else{
    $_SESSION['delete'] = "<div class='error'>Failed to delete</div>";
    header('location:'.SITE_URL.'admin/order.php');
}
// redirect to manage admin page with msg 
?>