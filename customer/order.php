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
            $ingredients = $row['ingredients'];
        }
    }
} else {
    // header('location:' . SITE_URL . 'page.php');
}
if (isset($_GET['username'])) {
    $customer = $_GET['username'];
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
        $total = $price * $qty;
        $order_date = date("Y-m-d h:i:sa");
        $status = "ordered"; //oredered,on delivery ,delivered , cancelled
        // $customer_name = $_POST['full_name'];
        $customer_contact = $_POST['phone'];
        // $customer_email = $_POST['email'];
        $customer_address = $_POST['address'];


        if ($qty <= 0) {
            $_SESSION['msg'] = "<div class='small'>***invalid quantity</div>";

            // header("location:" . SITE_URL . 'submit.php');
            // header("location:order.php");
        }
        //  else if ($customer_name == '') {
        //     $_SESSION['cname1'] = "<div class='small'>***name cannot be empty</div>";
        // } 
        // else if (strlen($customer_name) < 3) {
        //     $_SESSION['cname2'] = "<div class='small'>***invalid name</div>";
        // }
         else if (strlen($customer_contact) < 10) {
            $_SESSION['contact'] = "<div class='small'>***invalid phone number</div>";
        } else if ($customer_address == '') {
            $_SESSION['address'] = "<div class='small'>***empty address</div>";
        } 
        // else if ($customer_email == '') {
        //     $_SESSION['mail'] = "<div class='small'>***email cannot be empty</div>";
        // }
         else {


            $sql1 = "insert into nepali_table set
              food = '$food',
              price = $price,
              quantity = $qty,
              total = $total,
              order_date = '$order_date',
              status = '$status',
              customer_name = '$customer',
              customer_contact = '$customer_contact',
              
              customer_address = '$customer_address',
              additional = '$additional'
        ";

            $res1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
            if ($res1 == TRUE) {

                // $_SESSION['order'] = "<div class='success msg'><img src='tick.png'>
                // <h2>Thank You!</h2>
                // <p>Your order has been successfully placed and will be delivered in 45 minutes.</p>
                // </div>";


                header("location:" . SITE_URL . "customer/submit.php?username=$customer");
            } 
            else {
                $_SESSION['order'] = "<div class='error'>failed to order food</div>";
                header("location:" . SITE_URL . 'customer/page.php#menu');
            }
        }
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
                <p>Ingredients:</p><br>
                <div class="order_ingredients">
                    <?php echo $ingredients ?>
                </div>


                <p style="margin-top: 18px;">Ingredients to add or remove:</p><br>
                <input type="text" name="additional" class="width" placeholder="(buff/chicken..) and extra.."><br><br>
                <p style="margin-top: 0px;">Quantity:</p><br>
                <input type="number" name="quantity" placeholder="quantity for your order" required><br>
                <?php
                if (isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                ?>

            </div>
        </div>
        <h3 class="subheading">Order now</h3>
        <div class="order_now">
            <div class="input-box">


                <div class="input">
                    <p>Your number</p>
                    <input type="number" name="phone" placeholder="enter your number" id="phone"><br>
                    <?php
                    if (isset($_SESSION['contact'])) {
                        echo $_SESSION['contact'];
                        unset($_SESSION['contact']);
                    }
                    ?>

                </div>
            </div>
            <div class="input-box">
                <div class="input">
                    <p>Your address</p>
                    <!-- <input type="text" id="location" name="address" placeholder="enter your address" id="address"><br> -->
                    <input type="text" id="addressInput location address" name="address" placeholder="Address">
    <button onclick="getUserLocation()">Get My Location</button>
                    <?php
                    if (isset($_SESSION['address'])) {
                        echo $_SESSION['address'];
                        unset($_SESSION['address']);
                    }
                    ?>
                    
                </div>

            </div>


            
            <button id="payment-button" >Pay with Khalti</button>
            <input type="submit" name="submit" value="order now" class="btn"  >
        </div>

    </form>


</div>
<script>
        var config = {
            // replace the publicKey with yours
            "publicKey": "test_public_key_f9589ee50112449a840b81661a84d325",
            "productIdentity": "1234567890",
            "productName": "Dragon",
            "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
            "paymentPreference": [
                "KHALTI",
                "EBANKING",
                "MOBILE_BANKING",
                "CONNECT_IPS",
                "SCT",
                ],
            "eventHandler": {
                onSuccess (payload) {
                    // hit merchant api for initiating verfication
                    console.log(payload);
                },
                onError (error) {
                    console.log(error);
                },
                onClose () {
                    console.log('widget is closing');
                }
            }
        };

        var checkout = new KhaltiCheckout(config);
        var btn = document.getElementById("payment-button");
        btn.onclick = function () {
            // minimum transaction amount must be 10, i.e 1000 in paisa.
            checkout.show({amount: 1000});
        }
    </script>
<script type="text/javascript">
   
    function getUserLocation() {
      if ("geolocation" in navigator) {
        navigator.geolocation.getCurrentPosition(showUserLocation);
      } else {
        console.log("Geolocation is not supported by this browser.");
      }
    }

    function showUserLocation(position) {
      const latitude = position.coords.latitude;
      const longitude = position.coords.longitude;

      const url = `https://nominatim.openstreetmap.org/reverse?lat=${latitude}&lon=${longitude}&format=json`;

      fetch(url)
      .then(response => response.json())
        .then(data => {
          const address = data.display_name;
          const addressInput = document.getElementById('addressInput');
          addressInput.value = address;
        })
        .catch(error => {
          console.log('Error:', error);
        });
    }
  </script>




<?php include('partials-front/footer.php'); ?>