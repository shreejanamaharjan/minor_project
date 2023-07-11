<?php include('partials/menu.php') ?>
<style>
    .main{
        padding-top: 2%;
    padding-bottom: 2%;
    background-color: rgb(219, 232, 244);
    position: absolute;
    height: 100%;
    width: 100%;
    }
    .footer{
    position: fixed;
    bottom: 0;
    
    width: 100%;
}
</style>

<div class="main">
    <div class="wrapper">
        <h1>ADD ADMIN</h1><br><br>
        <?php
        if(isset($_SESSION['ADD'])){
            echo $_SESSION['ADD'];
            unset($_SESSION['ADD']);
        }
        ?>
        <form action="" method="POST">
            <table class="tbl-form">
                <tr>
                    <td>Full Name:</td>
                    <td><input type="text" name="full-name" placeholder="Ram Karki"></td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" placeholder="your username"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" placeholder="enter your password"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="add admin" class="btn-update">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
<?php include('partials/footer.php') ?>
<?php
// process value from form and save it in database
// 1.get data from form 
if (isset($_POST['submit'])) {
    $full_name = $_POST['full-name'];
    $username = $_POST['username'];
    $password = md5($_POST['password']); //password encryption 

    //    sql query
    $sql = "insert into admin set
        full_name='$full_name',
        username='$username',
        password='$password' ";
    
//    executing query and saving data into database 
    $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    // check whether the data is inserted or not 
    if($res==TRUE){
        $_SESSION['ADD'] = "<div class='success'>ADMIN ADDED SUCCESSFULLY</div>";
        header("location:".SITE_URL.'admin/manage-admin.php');
    }else{
        $_SESSION['ADD'] = "<div class='error'>failed to add admin</div>";
        header("location:".SITE_URL.'admin/add-admin.php');
    }
}
?>