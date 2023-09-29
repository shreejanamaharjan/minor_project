<?php include('partials-front/menu.php');
if (isset($_GET['username'])) {
    $customer = $_GET['username'];
}
?>





<!-- home section  -->
<div class="screen">
    <div class="slider" id="home">
        <figure>
            <img src="../image/customer_img/momo.jpg" alt="photo" width="75%" height="500">
            <img src="../image/customer_img/sekuwa.jpg" alt="photo" width="75%" height="500">
            <img src="../image/customer_img/thakali.jpg" alt="photo" width="75%" height="500">
            <img src="../image/customer_img/selroti.jpg" alt="photo" width="75%" height="500">
            <img src="../image/customer_img/momo.jpg" alt="photo" width="75%" height="500">
        </figure>

    </div>
    <!-- dishes section
    <div class="dish-box">
        <h1 class="subheading">OUR DISHES</h1>
        <div class="container" id="dishes">

            <div class="food">
                <img src="dumpling.png" alt=""><br>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>

                <h3>MOMO</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>Rs.130</span>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="food">
                <img src="bara.jpg" alt=""><br>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>

                <h3>BARA</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>Rs.40</span>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="food">
                <img src="khana-removebg-preview.jpg" alt=""><br>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>

                <h3>THAKALI</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>Rs.400</span>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="food">
                <img src="bajeko-sekuwa-removebg-preview.jpg" alt=""><br>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>

                <h3>SEKUWA</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>Rs.175</span>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="food">
                <img src="thukpa-removebg-preview.jpg" alt=""><br>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>

                <h3>THUKPA</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>Rs.120</span>
                <a href="#" class="btn">add to cart</a>
            </div>

            <div class="food">
                <img src="photo-removebg-preview.jpg" alt=""><br>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>

                <h3>CHANA ROTI</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>Rs.200</span>
                <a href="#" class="btn">add to cart</a>
            </div>
        </div>
    </div> -->
     <!-- speciality section -->
<section class="speciality" id="speciality">
    <h1 class="subheading"> OUR <span>SPECIALITY</span> </h1>
    <div class="box-container">
        <div class="box">
            <img class="image" src="../image/customer_img/momo.jpg" alt="">
            <div class="content overlay">
                <h3>Momo</h3>
                <h4>Ingredients</h4>
                <p>Flour, onions, garlic, ginger, cumin, corriandor, minced meat: chicken/ buff/pork, cabbage, salt, chilly, pepper </p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="../image/customer_img/chicken chowmein-removebg-preview.jpg" alt="">
            <div class="content">
                <h3>Chowmein</h3>
                <h4>Ingredients</h4>
                <p>Noodles, onion, garlic, ginger, salt, pepper, chilly, capsicum, corriander, soy sauce, vinegar, chicken/buff</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="../image/customer_img/sekuwa.jpg" alt="">
            <div class="content">
                <h3>Sekuwa</h3>
                <h4>Ingredients</h4>
                <p>Onion, garlic, ginger, salt, pepper, chilly, corriander, chicken, soysauce, vinegar, lemon</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="../image/customer_img/bara.jpg" alt="">
            <div class="content">
                <img src="images/s-4.png" alt="">
                <h3>Bara</h3>
                <h4>Ingredients</h4>
                <p>Lentils, garlic, ginger, green chilly, turmeric, salt, pepper, oil, beaten eggs, minced meat</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="../image/customer_img/thukpa.jpg" alt="">
            <div class="content">
                <h3>Thukpa</h3>
                <h4>Ingredients</h4>
                <p>Noodles, chicken stock, onion, tomato, spring onion, capsicum, garlic, ginger, salt, pepper, chilly, corriander, chicken, lemon, carrot, beans</p>
            </div>
        </div>
        <div class="box">
            <img class="image" src="../image/customer_img/khana-removebg-preview.jpg" alt="">
            <div class="content">
                <h3>Khana set</h3>
                <h4>Ingredients</h4>
                <p>Rice, lentil soup, spicy fried potatoes, spinach, meat: chicken/mutton, tomato chutney, gundruk </p>
            </div>
        </div>
    </div>
</section>

    <!-- about section -->
    <div class="about" id="about">
        <h3 class="subheading">ABOUT US</h3>
        <div class="description">
            <div class="content">
                <h3>Best And Healthy Food </h3>
                <p>Nepalese Cuisine combines a range of ingredients, techniques
                    and characteristics from its neighboring countrie,s with its own
                    gastronomic history.<br>Nepalese dishes are generally healthier than
                    most other South Asian cuisine, relying less on using fats and more on
                    chunky vegetables, lean meats, pickled ingredients and salads.<br>Common
                    ingredients found across Nepalese cuisine include lentils, potatoes (which
                    are particularly popular within the Newar communities in the Himalayas and
                    Pahar region), tomatoes, cumin, coriander, chilies, peppers, garlic and mustard oil. </p>
                <div class="icons-container">
                    <div class="symbol">
                        <i class="fas fa-dollar-sign"></i>
                        <span>easy payment</span>
                    </div>
                    <div class="symbol">
                        <i class="fas fa-headset"></i>
                        <span>24/7 services</span>
                    </div>
                </div>
                <a href="#" class="btn">Learn more</a>
            </div>



            <div class="images">
                <img src="../image/customer_img/nepali-removebg-preview.jpg" alt="">
            </div>


        </div>
    </div>
   
    <!-- menu section -->
    <div class="menu" id="menu">
        <h3 class="subheading">OUR MENU</h3><br>
       
        <?php
         
    if(isset($_SESSION['order'])){
        echo $_SESSION['order'];
        unset($_SESSION['order']);
    }
    ?>
     
        <div class="menu-container">
       
            <?php
            //  getting foods from database that are active and feature 
            $sql2 = "select * from food where active='Yes' and feature='Yes' limit 6";
            // execute the quer 
            $res2 = mysqli_query($conn, $sql2);
            // count rows 
            $count2 = mysqli_num_rows($res2);
            // food available or not 
            if ($count2 > 0) {
                while ($row = mysqli_fetch_assoc($res2)) {
                    $id = $row['id'];
                    $title = $row['title'];
                    $price = $row['price'];
                    $description = $row['description'];
                    $image_name = $row['img_name'];
            ?>
                    <div class="menu-box">
                        <div class="image">
                            <?php
                            // check whether image available or FT_NOT
                            if ($image_name == "") {
                                echo "<div class='error'>image not available</div>";
                            } else {
                            ?>
                                <img src="<?php echo SITE_URL; ?>image/food/<?php echo $image_name; ?>">
                            <?php
                            }
                            ?>


                            <div class="content">
                                <a href="#" class="fas fa-heart"></a>
                                <h3><?php echo $title; ?></h3>
                                <span><?php echo $price; ?></span>

                            </div>
                            <p><?php echo $description; ?></p>
                            <a href="order.php?food_id=<?php echo $id;?>&&username=<?php echo $customer?>" class="btn" >order now</a>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo "<div class='error'>food not available</div>";
            }
            ?>
           
           
        </div>
    </div>

    <!-- review section  -->
   

    <div class="review" id="review">
        <h3 class="subheading">CUSTOMER'S REVIEW</h3>
        <?php
            //  getting data from database
            $sql3 = "select * from review order by R_ID desc limit 3";
            // execute the quer 
            $res3 = mysqli_query($conn, $sql3);
            // count rows 
            $count3 = mysqli_num_rows($res3);
            $sn=1;
            // food available or not 
            if ($count3 > 0) {
                while ($row = mysqli_fetch_assoc($res3)) {
                    $id = $row['R_ID'];
                    $customer = $row['username'];
                    $feedback = $row['review'];
                   
            ?>
        <div class=" review-slider">
            <div class=" slide">
                <h3><?php echo $customer;?></h3>
                <p><?php echo $feedback;?>
                </p>
            </div>
        </div>
        <?php
                }
            } else {
                echo "<tr><td colspan='13' class='error'>review not available</td></tr>";
            }
            ?>
        <a href="review.php?username=<?php echo $customer?>" class="btn">give feedback</a>
        
        
    </div>  
    

    

        
<?php include('partials-front/footer.php'); ?>