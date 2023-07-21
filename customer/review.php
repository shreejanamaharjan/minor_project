<?php
    include('../config/constant.php');
  

 if (isset($_GET['username'])) {
    $customer = $_GET['username'];
    
}

     
     if(isset($_POST['submit'])){
        header("location:" . SITE_URL . "customer/page.php?username= $customer");
     }
    
    
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FOOD ORDER WEBSITE</title>
    <style>
      .container{
        width: 100%;
        height: 100%;
        z-index: 1004;
    background: rgba(0,0,0,.2);
   
    position: fixed;
    top: 0;
    left: 0;
      }
    .popup{
    width: 400px;
    background: rgb(232, 224, 224);
    border-radius: 6px;
    margin: 10% auto;
    text-align: center;
    padding: 0 30px 30px;
    
    
    
}

.popup img{
    width: 100px;
    margin-top: -50px;
    border-radius: 50%;
    box-shadow: 0 2px 5px rgba(0,0,0,.2);
}
.popup h2{
    font-size: x-large;
    font-weight: bold;
    margin: 30px 0 10px;
    color: rgb(4, 4, 4);
    
}
.popup p{
    font-size: medium;
    
}
.popup .button{
    width: 20%;
   margin-top: 2%;
    padding: 10px 0;
    background: green;
    color: #fff;
    font-size: medium;
    border-radius: 4px;
    cursor: pointer;
    box-shadow: 0 2px 5px rgba(0,0,0,.2);
}
.popup input{
  margin-top: 0;
  width: 100%;
 
}
    </style>
</head>
<body>
    <div class="container">
        <div class="popup" id="popup">
            <form action="" method="POST">
   
            <h2>Thank you for your feedback!</h2>
           
            <p>your feedback:</p>
            <input type="text" name="feedback"><br>
            <input type="submit" name="submit" class="button" value="OK">
            </form>

        </div>
    
    </div>
    

</body>
</html>