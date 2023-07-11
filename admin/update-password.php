<?php include('partials/menu.php');?>

<div class="main">
    <div class="wrapper">
        <h1>Change Password</h1><br><br>
        <?php
        if(isset($_GET['id'])){
            $id=$_GET['id'];
        }
        ?>
        <form action="" method="POST">
            <table class="tbl-form">
                <tr>
                    <td>Current password:</td>
                    <td ><input type="password" name="current_password" placeholder="current password"></td>
                </tr>
                <tr>
                    <td>New password:</td>
                    <td><input type="password" name="new_password" placeholder="new password"></td>
                </tr>
                <tr>
                    <td>Confirm password:</td>
                    <td><input type="password" name="confirm_password" placeholder="confirm password"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id;?>">
                        <input type="submit" name="submit" value="Change Password" class="btn-update">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
<?php
if(isset($_POST['submit'])){
    // get data from form 
$id= $_POST['id'];
$current_password=md5($_POST['current_password']);
$new_password=md5($_POST['new_password']);
$confirm_password=md5($_POST['confirm_password']);
    // check whether the user with current id and current password exist or not 
$sql = "select * from admin where id=$id and password='$current_password'";

// execute the query 
$res = mysqli_query($conn, $sql);
if($res==true){
    $count=mysqli_num_rows($res);
    if($count==1){
        // user exists 
        if($new_password==$confirm_password){
           
           $sql2 = "update admin set password ='$new_password' where id=$id";
           $res2 = mysqli_query($conn,$sql2);
           if($res==true){
            $_SESSION['changed']= "<div class='success'>password changed successfully.</div>";
            header('location:'.SITE_URL.'admin/manage-admin.php');
           }else{
            $_SESSION['changed']= "<div class='error'>failed to change password.</div>";
            header('location:'.SITE_URL.'admin/manage-admin.php');
           }
        }
        else{
            $_SESSION['pwd-not-matched']= "<div class='error'>password not matched.</div>";
header('location:'.SITE_URL.'admin/manage-admin.php');
        }
       

    }else{
$_SESSION['user-not-found']= "<div class='error'>user not found.</div>";
header('location:'.SITE_URL.'admin/manage-admin.php');
    }
}
    // check whether the new password and confirm password match or not 

    // change password if all abvoe is true 
}
?>
<?php include('partials/footer.php');?>