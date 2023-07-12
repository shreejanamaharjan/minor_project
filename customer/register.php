<?php include('../config/constant.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>
<?php
$msg="";
if (isset($_POST['register'])) {
    $name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $code = md5(rand());
    $register_date = date("Y-m-d h:i:sa"); 
    if(strlen($name)<3){
        $_SESSION['full_name'] = "<div class='error'>name too short</div>";
            
    }
    else if(mysqli_num_rows(mysqli_query($conn, "select * from customer_login where email='{$email}'"))>0){
        $msg = "<div class='error'>This email has been already exists.</div>";
    }
    // else if(strlen($password)<3){
    //     $_SESSION['password'] = "<div class='error'>invalid password</div>";
           
    // }
     else {


        $sql1 = "insert into customer_login set
        full_name = '$name',
        email = '$email',
        password = '$password',
        code = '$code',
        register_date = '$register_date'
    ";

        $res1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
        if ($res1 == TRUE) {

            
           $msg = "<div class='success'>success</div>";
        } else {
            
            $_SESSION['register'] = "<div class='error'>failed to order food</div>";
            header("location:" . SITE_URL . 'customer/register.php');
        }
    }
} 

?>

<body>

    
    <div class="wrapper">
        <div class="logo">
            <p>Nepali<span>Spice</span></p>
        </div>
        <div class="logreg-box">
            <div class="form-box_register">
                <div class="logreg-title">
                    <h2>Registration</h2>
                    <p>Please provide the following to verify your identity</p>
                    <?php
                      if (isset($_SESSION['register'])) {
                        echo $_SESSION['register'];
                        unset($_SESSION['register']);
                    }
                    
                   echo $msg;
                    ?>
                </div>
                <form action="#" method="post">
                    <div class="input-box">
                        <span class="icon"><i class="bx bxs-user"></i></span>
                        <input type="text" name="full_name" value="<?php if(isset($_POST['register'])){echo $name;}?>" required />
                        <label>Full Name</label>
                        <?php
                        if (isset($_SESSION['full_name'])) {
                            echo $_SESSION['full_name'];
                            unset($_SESSION['full_name']);
                        }
                        ?>
                        
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class="bx bxs-envelope"></i></span>
                        <input type="email" name="email" value="<?php if(isset($_POST['register'])){echo $email;}?>" required />
                        <label>Email</label><?php echo $msg;?>
                    </div>
    
                    <div class="input-box">
                        <span class="icon"><i class="bx bxs-lock-alt"></i></span>
                        <input type="password" name="password" required />
                        <label>Password</label>
                        <?php
                         if (isset($_SESSION['password'])) {
                            echo $_SESSION['password'];
                            unset($_SESSION['password']);
                        }
                        ?>
                    </div>
                    <div class="remember-forget">
                        <label><input type="checkbox" /> agree to the terms &
                            conditions</label>
                    </div>
    
                    <button type="submit" class="btn" name="register">Register</button>
    
                    <div class="logreg-link">
                        <p>
                            already have a account?
                            <a href="login.php" class="login-link">Login</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
       
        
    </div>


   




</body>

</html>