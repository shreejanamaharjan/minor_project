<?php include('../config/constant.php'); ?>

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
           
            <a href="page.php#home">home</a>
            <a href="page.php#speciality">dishes</a>
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

    
     <!-- search form -->
     <form action="" id="search-form" method="POST">
        <input type="search" name="search" id="search-box" placeholder="search here(momo)...">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>

   
    