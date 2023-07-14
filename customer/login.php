<?php include('../config/constant.php'); ?>
<?php
$msg = "";

if (isset($_GET['verification'])) {
    if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM customer_login WHERE code='{$_GET['verification']}'")) > 0) {
        $query = mysqli_query($conn, "UPDATE customer_login SET code='' WHERE code='{$_GET['verification']}'");
        
        if ($query) {
            $msg = "<div class='success'>Account verification has been successfully completed.</div>";
        }
    } else {
        header('location:' . SITE_URL . 'customer/login.php');
    }
}

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));

    $sql = "SELECT * FROM customer_login WHERE email='{$email}' AND password='{$password}'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $_SESSION['user'] = $email;
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row['full_name'];
            
        }
        $row = mysqli_fetch_assoc($result);

        if (empty($row['code'])) {
               
                header("location:" . SITE_URL . "customer/page.php?username={$name}");
        } else {
            $msg = "<div class='error'>First verify your account and try again.</div>";
        }
    } else {
        $msg = "<div class='error'>Email or password do not match.</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="login.css">
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
</head>

<body>
    
    <div class="wrapper">
        <div class="logo">
            <p>Nepali<span>Spice</span></p>
        </div>
        <?php
        if(isset($_SESSION['no-login-msg'])){
            echo $_SESSION['no-login-msg'];
            unset($_SESSION['no-login-msg']);
        }
        ?>
        <div class="logreg-box">
            <!-- login form -->
            <div class="form-box_login">
                <div class="logreg-title">
                <?php
                        if (isset($_SESSION['customer_register'])) {
                            echo $_SESSION['customer_register'];
                            unset($_SESSION['customer_register']);
                        }
                ?>
                    <h2>Login</h2>
                    <p>Please login to use the platform</p>
                    <?php echo $msg;?>
                </div>
                <form action="#" method="POST">
                    <div class="input-box">
                        <span class="icon"><i class="bx bxs-envelope"></i></span>
                        <input type="email" name="email" required />
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class="bx bxs-lock-alt"></i></span>
                        <input type="password" name="password" required />
                        <label>Password</label>
                    </div>
                    <div class="remember-forget">
                        <label><input type="checkbox" /> remember me</label>
                        <a href="forget.php" class="forget-link">Forget password?</a>
                    </div>

                    <button type="submit" class="btn" name="login">Login</button>

                    <div class="logreg-link">
                        <p>
                            Don't have a account?
                            <a href="register.php" class="register-link">Register</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
        
    </div>

</body>

</html>