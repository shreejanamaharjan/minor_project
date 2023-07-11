<?php include('partials-front/menu.php'); ?>

<!-- login section -->
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
              </div>
              <div class="remember-forget">
                <label
                  ><input type="checkbox" /> agree to the terms &
                  conditions</label
                >
              </div>

              <button type="submit" class="btn">Register</button>

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


<!-- home section  -->
<div class="screen">
    <div class="slider" id="home">
        <figure>
            <img src="momo.jpg" alt="photo" width="75%" height="500">
            <img src="sekuwa.jpg" alt="photo" width="75%" height="500">
            <img src="thakali.jpg" alt="photo" width="75%" height="500">
            <img src="selroti.jpg" alt="photo" width="75%" height="500">
            <img src="momo.jpg" alt="photo" width="75%" height="500">
        </figure>

    </div>
    <!-- dishes section -->
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
                <img src="momo.jpg" alt=""><br>
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
                <img src="" alt=""><br>
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
    </div>
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
                <img src="nepali-removebg-preview.jpg" alt="">
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
                            <a href="order.php?food_id=<?php echo $id;?>" class="btn" >order now</a>
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
        <div class="review-slider">
            <div class="slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="prince.jpg" alt="">
                    <div class="user-info">
                        <h3>Prince Kumar Yadav</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div><br>
                        <p>It’s a great experience. The ambiance is very welcoming and charming. Amazing wines, food and service. Staff are extremely knowledgeable and make great recommendations.

                        </p>
                    </div>

                </div>
            </div>

            <div class="slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="shreeya.jpg" alt="">
                    <div class="user-info">
                        <h3>Shreeya Shrestha</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div><br>
                        <p>This cozy restaurant has left the best
                            impressions! Hospitable hosts, delicious
                            dishes, beautiful presentation, wide wine list
                            and wonderful dessert. I recommend to everyone!
                            I would like to come back here again and again.

                        </p>
                    </div>

                </div>
            </div>



            <div class="slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="shreejana.jpg" alt="">
                    <div class="user-info">
                        <h3>Shreejana Maharjan</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div><br>
                        <p>This place is great! Atmosphere is chill and
                            cool but the staff is also really friendly. They know
                            what they’re doing and what they’re talking about, and
                            you can tell making the customers happy is their main priority.
                            Food is pretty good, some italian classics and some twists, and for
                            their prices it’s 100% worth it.

                        </p>
                    </div>

                </div>

            </div>



        </div>
    </div>


<?php include('partials-front/footer.php'); ?>