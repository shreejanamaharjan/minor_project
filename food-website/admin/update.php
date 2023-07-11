<?php include('partials/menu.php');?>
<div class="main">
    <div class="wrapper">
        <h1>UPDATE ADMIN</h1><br>
        <?php
        // get the ID 
        $id=$_GET['id'];
        // create sql query
        $sql="select * from admin where id=$id";
        // execute query 
        $res = mysqli_query($conn , $sql);
        // check whether the query executed or not 
        if($res==true){
            $count = mysqli_num_rows($res);
            // check admin data is availabale or not 
            if($count==1){
                $row=mysqli_fetch_assoc($res);
                $full_name=$row['full_name'];
                $username=$row['username'];
            }else{
                header('location:'.SITE_URL.'admin/manage-admin.php');
            }
        }
        ?>
        <form action="" method="POST">
            <table class="tbl-form">
                <tr>
                    <td>Full Name:</td>
                    <td><input type="text" name="full-name" value="<?php echo $full_name;?>"></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" value="<?php echo $username;?>"></td>
                </tr>
               
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id?>">
                        <input type="submit" name="submit" value="update" class="btn-update">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
<?php
// check whether the submit button is clicked or not 
if(isset($_POST['submit'])){
    // get all value from form 
    $id= $_POST['id'];
    $full_name=$_POST['full-name'];
    $username=$_POST['username'];

    // create sql query to update admi 
    $sql = "update admin set full_name='$full_name', username='$username' where id=$id";
    //  execute the query 
    $res = mysqli_query($conn, $sql);

    // check whether the query executed successfully or nor 
    if($res==TRUE){
        $_SESSION['update'] = "<div class='success'>admin updated successfully</div>";
        header('location:'.SITE_URL.'admin/manage-admin.php');
    }else{
        $_SESSION['update'] = "<div class='error'>failed to update</div>";
        header('location:'.SITE_URL.'admin/manage-admin.php');
    }
}
?>


<?php include('partials/footer.php');?>