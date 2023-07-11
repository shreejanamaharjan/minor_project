<?php include('../config/constant.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login to nepalifood website</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login">
        <h1>login</h1><br>

        <?php
        if(isset($_SESSION['login'])){
            echo $_SESSION['login'];
            unset($_SESSION['login']);
        }
        if(isset($_SESSION['no-login-msg'])){
            echo $_SESSION['no-login-msg'];
            unset($_SESSION['no-login-msg']);
        }
        ?><br><br>
        <!-- login form  -->
        <form action="" method="POST" >
           <label for="username">Username: </label> <br>
            <input type="text" name="username" placeholder="enter your username"><br><br>

           <label for="password"> Password:</label> <br>
            <input type="password" name="password" placeholder="enter password"><br><br>

            <input type="submit" name="submit" value="Login" class="btn-primary" ><br>
        </form>
    </div>
</body>
</html>

<?php
// check whether the submit button is clicked or not 
if(isset($_POST['submit'])){
    //  $username=$_POST['username'];
    // $password=md5($_POST['password'])
     $username=mysqli_real_escape_string($conn, $_POST['username']);
     $password=mysqli_real_escape_string($conn, md5($_POST['password']));

     $sql = "select * from admin where username='$username' and password='$password'";
     $res = mysqli_query($conn, $sql);
     $count = mysqli_num_rows($res);
     if($count==1){
        $_SESSION['login'] = "<div class='success'>Login successful</div>";
        $_SESSION['user'] = $username;
        header('location:'.SITE_URL.'admin/');
     }else{
        $_SESSION['login'] = "<div class='error text-center' >username or password not matched</div>";
        header('location:'.SITE_URL.'admin/login.php');
     }

}
?>