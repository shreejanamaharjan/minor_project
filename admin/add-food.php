<?php include('partials/menu.php');?>
<div class="main">
    <div class="wrapper">
        <h1>Add food</h1><br><br>
        <?php
        if(isset($_SESSION['upload'])){
            echo $_SESSION['upload'];
            unset($_SESSION['upload']);
        }
        ?>

        <form action="" method="POST" enctype="multipart/form-data">
            <table class="tbl-form">
                <tr>
                    <td>title:</td>
                    <td><input type="text" name="title" placeholder="name of food"></td>
                </tr>
                <tr>
                    <td>description:</td>
                    <td><textarea name="description"  cols="20" rows="5" ></textarea></td>
                </tr>
                <tr>
                    <td>price:</td>
                    <td><input type="number" name="price" ></td>
                </tr>
               
                <tr>
                    <td>Featured:</td>
                    <td>
                        <input type="radio" name="featured" value="Yes">Yes
                         <input type="radio" name="featured" value="No">No
                    </td>
                </tr>
                <tr>
                    <td>Active:</td>
                    <td>
                    <input type="radio" name="active" value="Yes">Yes
                         <input type="radio" name="active" value="No">No
                    </td>
                </tr>
                <tr>
                    <td >image:</td>
                    <td><input type="file" name="image" ></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <br><input type="submit" name="submit" value="Add food" class="btn-update">
                    </td>
                </tr>
            </table>
        </form>
        <?php
        if(isset($_POST['submit'])){
            // add food in database 
            // get data from form 
            $title= $_POST['title'];
            $description=$_POST['description'];
            $price=$_POST['price'];
            
            // check radio button for feature and active 
            if(isset($_POST['featured'])){
                $featured=$_POST['featured'];
            }else{
                $featured= "No";
            }

            if(isset($_POST['active'])){
                $active=$_POST['active'];
            }else{
                $active="No";
            }
            // upload image 
            // check whether the select image is clicked or not 
           
            if(isset($_FILES['image']['name'])){
                // get the detailes of selected image 
                $image_name = $_FILES['image']['name'];
                // check whether the image is selected or not 
                $ext =end(explode('.', $image_name));
                $image_name = "food_".rand(0000, 9999).'.'.$ext;
                
                    $src = $_FILES['image']['tmp_name'];
                    $dst ="../image/food/".$image_name;

                    $upload = move_uploaded_file($src, $dst);

                    if($upload==false){
                        $_SESSION['upload'] = "<div class='error'>failed to upload</div>";
                        header('location:'.SITE_URL.'admin/add-food.php');
                        die();
                    }
                
            }else{
                $image_name = "";
            }
            // insert into database 
            $sql2 = "insert into food set
               title='$title',
               description='$description',
               price=$price,
               img_name='$image_name',
               feature = '$featured',                     
               active='$active'";

               $res2 = mysqli_query($conn, $sql2);
               if($res2==true){
                $_SESSION['add'] = "<div class='success'>food added succesfully</div>";
                header('location:'.SITE_URL.'admin/food.php');
               }else{
                $_SESSION['add'] = "<div class='error'>failes to add food...</div>";
                header('location:'.SITE_URL.'admin/food.php');
               }
               
            // redirect with msg 
        }
        ?>
    </div>
</div>

<?php include('partials/footer.php');?>