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
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="design.css">
    <link rel="stylesheet" href="order.css">
     <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- header -->
    <header>
        <a href="#" class="logo"><i class="fas-fa-untensils"></i>
            <p>Nepali<span>Food</span></p>
        </a>
        <nav class="navbar">
            <a href="page.php#home">home</a>
            <a href="page.php#dishes">dishes</a>
            <a href="page.php#about">about</a>
            <a href="page.php#menu">menu</a>
            <a href="page.php#review">review</a>
            <a href="page.php#footer">contact</a>
            <button class="btnLogin-popup">Login</button>
        </nav>
        <div class="icons">
            <i class="fas fa-bars" id="bars"></i>
            <i class="fas fa-search" id="search-icon"></i>
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-shopping-cart"></a>
        </div>

    </header>
 

     <!-- search form -->
     <form action="" id="search-form" method="POST">
        <input type="search" name="search" id="search-box" placeholder="search here(momo)...">
        <label for="search-box" class="fas fa-search"></label>
        <i class="fas fa-times" id="close"></i>
    </form>
