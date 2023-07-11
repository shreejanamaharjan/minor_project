<?php
include('../config/constant.php');
if(isset($_GET['id']) && isset($_GET['image_name'])){
    // get id and image name 
    $id=$_GET['id'];
    $image_name=$_GET['image_name'];
    // remove the image if available 
    if($image_name!=""){
        $path = "../image/food/".$image_name;
        $remove = unlink($path);
        if($remove==false){
            $_SESSION['upload'] = "<div class='error'>failed to remove</div>";
            header('location:'.SITE_URL.'admin/food.php');
            die(); 
        }
    }
    // delete food from database 
    $sql = "delete from food where id=$id";
    $res = mysqli_query($conn, $sql);
    if($res==true){
        $_SESSION['delete'] = "<div class='success'>food deleted successfully</div>";
        header('location:'.SITE_URL.'admin/food.php');
    }else{
        $_SESSION['delete'] = "<div class='error'>food cannot be deleted</div>";
        header('location:'.SITE_URL.'admin/food.php');
    }
    // redirect to food page with msg 
}else{
    $_SESSION['unauthorised'] = "<div class='error'>unauthorised access</div>";
    header('location:'.SITE_URL.'admin/food.php');
}
?>