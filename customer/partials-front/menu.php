<?php include('../config/constant.php'); 
include('login-check.php');
if (isset($_GET['username'])) {
    $customer = $_GET['username'];
}
?>

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
 
    
    <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBv9Qb75h7mqUDJmdy3HFRFNlYxsjdH4fk&libraries=places"></script>
</head>

<body>

    <!-- header -->
    <header>
        <div class="logo">
            <p>Nepali<span>Spice</span></p>
        </div>
           
        <nav class="navbar">
           
            <a href="page.php?username=<?php echo $customer;?>">home</a>
            <a href="page.php?username=<?php echo $customer;?>">dishes</a>
            <a href="page.php?username=<?php echo $customer;?>">about</a>
            <a href="page.php?username=<?php echo $customer;?>">menu</a>
            <a href="page.php?username=<?php echo $customer;?>">review</a>
            <a href="page.php?username=<?php echo $customer;?>">contact</a>
        </nav>
        <div class="icons">
            <i class="fas fa-bars" id="bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
        </div>

        <div class="main">
        <i class='bx bx-user-circle'></i>
        <?php echo $customer;?>
            <a href="logout.php" class="btnLogin-popup">Logout</a>
            
            <!-- <div class="bx bx-menu" id="menu-icon"></div> -->
        </div>
    </header>

    
     <!-- search form -->
     <form action="" id="search-form" method="POST">
        <input type="search" name="search" id="search-box" placeholder="search here(momo)...">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>

   
    