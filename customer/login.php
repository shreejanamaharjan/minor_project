<?php include('../config/constant.php'); ?>
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
                </div>
                <form action="#" method="POST">
                    <div class="input-box">
                        <span class="icon"><i class="bx bxs-envelope"></i></span>
                        <input type="email" required />
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class="bx bxs-lock-alt"></i></span>
                        <input type="password" required />
                        <label>Password</label>
                    </div>
                    <div class="remember-forget">
                        <label><input type="checkbox" /> remember me</label>
                        <a href="forget.php" class="forget-link">Forget password?</a>
                    </div>

                    <button type="submit" class="btn">Login</button>

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