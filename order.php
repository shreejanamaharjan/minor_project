<?php include('partials-front/menu.php'); ?>


<?php
if (isset($_GET['food_id'])) {
    $food_id = $_GET['food_id'];
    $sql = "select * from food where id=$food_id";
    $res = mysqli_query($conn,  $sql);
    $count = mysqli_num_rows($res);
    if ($count == 1) {
        while ($row = mysqli_fetch_assoc($res)) {
            $id = $row['id'];
            $title = $row['title'];
            $price = $row['price'];
        }
    }
} else {
    // header('location:' . SITE_URL . 'page.php');
}
?>

<!-- order section  -->

<div class="order" id="order">
<?php



if (isset($_POST['submit'])) {

    $food = $_POST['food'];
    $price = $_POST['price'];
    $qty = $_POST['quantity'];
    $additional = $_POST['additional'];
    echo $qty;
    $total = $price * $qty;
    $order_date = date("Y-m-d h:i:sa");
    $status = "ordered"; //oredered,on delivery ,delivered , cancelled
    $customer_name = $_POST['full_name'];
    $customer_contact = $_POST['phone'];
    $customer_email = $_POST['email'];
    $customer_address = $_POST['address'];


   if($qty<=0){
       $_SESSION['msg']="<div class='small'>***invalid quantity</div>";
  
    // header("location:" . SITE_URL . 'submit.php');
    // header("location:order.php");
   }else if($customer_name ==''){
    $_SESSION['cname1']="<div class='small'>***name cannot be empty</div>";
   }
   else if( strlen($customer_name)<3){
    $_SESSION['cname2']="<div class='small'>***invalid name</div>";
   }
   else if(strlen($customer_contact)<10){
    $_SESSION['contact']="<div class='small'>***invalid phone number</div>";
   }else if($customer_address==''){
    $_SESSION['address']="<div class='small'>***empty address</div>";
   }
   else if ($customer_email == '') {
    $_SESSION['mail']="<div class='small'>***email cannot be empty</div>";
}
   else{


    $sql1 = "insert into nepali_table set
              food = '$food',
              price = $price,
              quantity = $qty,
              total = $total,
              order_date = '$order_date',
              status = '$status',
              customer_name = '$customer_name',
              customer_contact = '$customer_contact',
              customer_email = '$customer_email',
              customer_address = '$customer_address',
              additional = '$additional'
        ";

    $res1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
    if ($res1 == TRUE) {

        // $_SESSION['order'] = "<div class='success msg'><img src='tick.png'>
        // <h2>Thank You!</h2>
        // <p>Your order has been successfully placed and will be delivered in 45 minutes.</p>
        // </div>";


        header("location:" . SITE_URL . 'submit.php');
    } else {
        $_SESSION['order'] = "<div class='error'>failed to order food</div>";
        header("location:" . SITE_URL . 'page.php#menu');
    }}
}
?>
    <form action="" method="POST">
        <div class="food-details">
      
            <h5>
                food-details
            </h5>
            <div class="details">
                <p>Food Name:</p>
                <br>

                <input type="text" name="food" value="<?php echo $title; ?>" readonly>
                <p>Food Price:</p><br>

                <input type="number" name="price" value="<?php echo $price; ?>" readonly><br><br>
                <p>Additional:</p><br>
                <input type="text" name="additional" placeholder="(buff/chicken..) and extra.."><br><br>
                <p>Quantity:</p><br>
                <input type="number" name="quantity" placeholder="quantity for your order" required><br>
               <?php
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
        ?> 
              
            </div>
        </div>
        <h3 class="subheading">ORDER NOW</h3>
        <div class="input-box">
            <div class="input">
                <span>Your name</span>
                <input type="text" name="full_name" placeholder="enter your name" id="username"><br>
                <?php
        if(isset($_SESSION['cname1'])){
            echo $_SESSION['cname1'];
            unset($_SESSION['cname1']);
        }
        if(isset($_SESSION['cname2'])){
            echo $_SESSION['cname2'];
            unset($_SESSION['cname2']);
        }
        ?> 

            </div>

            <div class="input">
                <span>Your number</span>
                <input type="number" name="phone" placeholder="enter your number" id="phone"><br>
                <?php
        if(isset($_SESSION['contact'])){
            echo $_SESSION['contact'];
            unset($_SESSION['contact']);
        }
        ?> 

            </div>
        </div>
        <div class="input-box">
            <div class="input">
                <span>Your address</span>
                <input type="text" name="address" placeholder="enter your address" id="address"><br>
                <?php
        if(isset($_SESSION['address'])){
            echo $_SESSION['address'];
            unset($_SESSION['address']);
        }
        ?> 

            </div>

            <div class="input">
                <span>email</span>
                <input type="email" name="email" placeholder="enter your email" id="email"><br>
                <?php
        if(isset($_SESSION['mail'])){
            echo $_SESSION['mail'];
            unset($_SESSION['mail']);
        }
        ?> 

            </div>
            <input type="submit" name="submit" value="Order now" class="btn">
        </div>
        
    </form>
    

</div>




<?php include('partials-front/footer.php'); ?>