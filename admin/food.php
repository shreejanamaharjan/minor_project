<?php include('partials/menu.php') ?>

<!-- main section -->
<div class="main">
    <div class="wrapper">
        <h1>MANAGE FOOD</h1><br>
        <!-- button to add admin  -->
        <a href="<?php echo SITE_URL; ?>admin/add-food.php" class="btn-primary">add food</a><br><br>
        <?php
        if (isset($_SESSION['add'])) {
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        }
        if (isset($_SESSION['delete'])) {
            echo $_SESSION['delete'];
            unset($_SESSION['delete']);
        }
        if (isset($_SESSION['upload'])) {
            echo $_SESSION['upload'];
            unset($_SESSION['upload']);
        }
        if (isset($_SESSION['unauthorised'])) {
            echo $_SESSION['unauthorised'];
            unset($_SESSION['unauthorised']);
        }
        if (isset($_SESSION['update'])) {
            echo $_SESSION['update'];
            unset($_SESSION['update']);
        }
        ?>
        <table class="tbl">
            <tr>
                <th>S.N.</th>
                <th>Title</th>
                <th>Price</th>
                <th>Image</th>
                <th>Featured</th>
                <th>Active</th>
                <th>Action</th>
            </tr>
            <?php
            $sql = "select * from food";
            $res = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($res);
            $sn=1;
            if ($count > 0) {
                while ($row = mysqli_fetch_assoc($res)) {
                    $id = $row['id'];
                    $title = $row['title'];
                    $price = $row['price'];
                    $image_name = $row['img_name'];
                    $featured = $row['feature'];
                    $active = $row['active'];
            ?>
                    <tr>
                        <td><?php echo $sn++;?></td>
                        <td><?php echo $title;?></td>
                        <td><?php echo $price;?></td>
                        <td><?php 
                        if($image_name!=""){
                            ?>
                           
                            <img src="<?php echo SITE_URL; ?>image/food/<?php echo $image_name; ?>" width="100px" >
                            <?php

                        
                        }else{
                            echo "<div class='error'>image not added</div>";
                           
                        }
                        ?></td>
                        <td><?php echo $featured;?></td>
                        <td><?php echo $active;?></td>
                        <td>
                            <a href="<?php echo SITE_URL;?>admin/update-food.php?id=<?php echo $id; ?>" class="btn-update">Update</a>
                            <a href="<?php echo SITE_URL;?>admin/delete-food.php?id=<?php echo $id; ?>&image_name=<?php echo $image_name;?>" class="btn-delete">Delete</a>
                        </td>
                    </tr>
            <?php
                }
            } else {
                echo "<tr><td colspan='7' class='error'>Food not added yet</td></tr>";
            }
            ?>



        </table>
    </div>

</div>

<?php include('partials/footer.php') ?>