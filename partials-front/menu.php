<?php include('config/constant.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOOD ORDER WEBSITE</title>

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="design.css">
    <link rel="stylesheet" href="order.css">
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"

    />
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php


echo 'hello;';
if (isset($_POST['registration'])) {
  $name = $_POST['full_name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  if(strlen($name)<4){
    $_SESSION['cname2']="<div class='small'>***invalid name</div>";
  }else if(strlen($password)<4){
    $_SESSION['password1']="<div class='small'>***password must contain at least 4 character</div>";
  }
   else{


    $sql1 = "insert into customer_login set
    full_name = '$name',
    email = '$email',
    password = '$password'
             
        ";

    $res1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
    if ($res1 == TRUE) {

        // $_SESSION['order'] = "<div class='success msg'><img src='tick.png'>
        // <h2>Thank You!</h2>
        // <p>Your order has been successfully placed and will be delivered in 45 minutes.</p>
        // </div>";


        header("location:" . SITE_URL . 'page.php#menu');
    } else {
        $_SESSION['order'] = "<div class='error'>failed to order food</div>";
        header("location:" . SITE_URL . 'page.php#menu');
    }}
}
?>
    <!-- header -->
    <header>
        <div class="logo">
            <p>Nepali<span>Spice</span></p>
        </div>
           
        <nav class="navbar">
           
            <a href="page.php#home">home</a>
            <a href="page.php#dishes">dishes</a>
            <a href="page.php#about">about</a>
            <a href="page.php#menu">menu</a>
            <a href="page.php#review">review</a>
            <a href="page.php#footer">contact</a>
        </nav>
        <div class="icons">
            <i class="fas fa-bars" id="bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
        </div>

        <div class="main">
            <a href="#" class="btnLogin-popup">Login</a>
            <i class='bx bx-user-circle'></i>
            <!-- <div class="bx bx-menu" id="menu-icon"></div> -->
        </div>
    </header>

    <section class="section">
      <div class="wrapper">
        <span class="icon-close">
          <i class="bx bx-x"></i>
        </span>
        <div class="logreg-box">
          <!-- login form -->
          <div class="form-box_login">
            <div class="logreg-title">
              <h2>Login</h2>
              <p>Please login to use the platform</p>
            </div>
            <form action="#">
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
                <a href="#" class="forget-link">Forget password?</a>
              </div>

              <button type="submit" class="btn">Login</button>

              <div class="logreg-link">
                <p>
                  Don't have a account?
                  <a href="#" class="register-link">Register</a>
                </p>
              </div>
            </form>
          </div>

          <!-- forget password form -->
          <div class="form-box_forgetpassword">
            <div class="logreg-title">
              <i class="bx bx-user-circle"></i>
              <p>couldn't login to your account?</p>
            </div>
            <form action="#">
              <div class="input-box">
                <span class="icon"><i class="bx bxs-envelope"></i></span>
                <input type="email" required />
                <label>Email</label>
              </div>
              <div class="input-box">
                <span class="icon"><i class="bx bxs-lock-alt"></i></span>
                <input type="password" required />
                <label> New password</label>
              </div>
              <div class="input-box">
                <span class="icon"><i class="bx bxs-lock-alt"></i></span>
                <input type="password" required />
                <label>Confirm password</label>
              </div>

              <button type="submit" class="btn">submit</button>

              <div class="logreg-link">
                <p>
                  create account. <a href="#" class="create-link">Register</a>
                </p>
              </div>
            </form>
          </div>

          <!-- register form -->
          <div class="form-box_register">
            <div class="logreg-title">
              <h2>Registration</h2>
              <p>Please provide the following to verify your identity</p>
            </div>
            <form action="#">
              <div class="input-box">
                <span class="icon"><i class="bx bxs-user"></i></span>
                <input type="text" required />
                <label>Full Name</label>
                <?php
        if(isset($_SESSION['cname1'])){
            echo $_SESSION['cname1'];
            unset($_SESSION['cname1']);
        }
        ?> 
              </div>
              <div class="input-box">
                <span class="icon"><i class="bx bxs-envelope"></i></span>
                <input type="email" required />
                <label>Email</label>
              </div>

              <div class="input-box">
                <span class="icon"><i class="bx bxs-lock-alt"></i></span>
                <input type="password" required />
                <label>Password</label>
                <?php
        if(isset($_SESSION['password1'])){
            echo $_SESSION['password1'];
            unset($_SESSION['password1']);
        }
        ?> 
              </div>
              <div class="remember-forget">
                <label
                  ><input type="checkbox" /> agree to the terms &
                  conditions</label
                >
              </div>

              <button type="submit" class="btn" name="registration">Register</button>

              <div class="logreg-link">
                <p>
                  already have a account?
                  <a href="#" class="login-link">Login</a>
                </p>
              </div>
            </form>
          </div>
        </div>

        <div class="media-options">
          <a href="#">
            <i class="bx bxl-google"></i>
            <span>Login with Google</span>
          </a>
          <a href="#">
            <i class="bx bxl-facebook-circle"></i>
            <span>Login with Facebook</span>
          </a>
        </div>
      </div>
    </section>

     <!-- search form -->
     <form action="" id="search-form" method="POST">
        <input type="search" name="search" id="search-box" placeholder="search here(momo)...">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>

   
    