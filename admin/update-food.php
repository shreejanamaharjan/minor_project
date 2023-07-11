<?php
include('partials/menu.php');
?>
<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql2 = "select * from food where id=$id";
    $res2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_assoc($res2);
    $title = $row2['title'];
    $description = $row2['description'];
    $price = $row2['price'];
    $current_image = $row2['img_name'];
    $featured = $row2['feature'];
    $active = $row2['active'];
} else {
    header('location:' . SITE_URL . 'admin/food.php');
}
?>
<div class="main">
    <div class="wrapper">
        <h1>Update food</h1>
        <br>

        <form action="" method="POST" enctype="multipart/form-data">
            <table class="tbl-form">
                <tr>
                    <td>title:</td>
                    <td><input type="text" name="title" placeholder="name of food" value="<?php echo $title; ?>"></td>
                </tr>
                <tr>
                    <td>description:</td>
                    <td><textarea name="description" cols="20" rows="5"><?php echo $description; ?></textarea></td>
                </tr>
                <tr>
                    <td>price:</td>
                    <td><input type="number" name="price" value="<?php echo $price; ?>"></td>
                </tr>

                <tr>
                    <td>Featured:</td>
                    <td>
                        <input <?php if ($featured == "Yes") {
                                    echo "checked";
                                } ?> type="radio" name="featured" value="Yes">Yes
                        <input <?php if ($featured == "No") {
                                    echo "checked";
                                } ?> type="radio" name="featured" value="No">No
                    </td>
                </tr>
                <tr>
                    <td>Active:</td>
                    <td>
                        <input <?php if ($active == "Yes") {
                                    echo "checked";
                                } ?> type="radio" name="active" value="Yes">Yes
                        <input <?php if ($active == "No") {
                                    echo "checked";
                                } ?> type="radio" name="active" value="No">No
                    </td>
                </tr>
                <tr>
                    <td> Current image:</td>
                    <td><?php
                        if ($current_image == "") {
                            echo "<div class='error'>image not available</div>";
                        } else {
                        ?>
                            <img src="<?php echo SITE_URL; ?>image/food/<?php echo $current_image; ?>" width="100px" name="current_name">
                        <?php
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Select image:</td>
                    <td><input type="file" name="image"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="hidden" name="current_image" value="<?php echo $current_image; ?>">

                        <br><input type="submit" name="submit" value="update food" class="btn-update"><br><br><br>
                    </td>
                </tr>
            </table>
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $id = $_POST['id'];
            $title = $_POST['title'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $featured = $_POST['featured'];
            $active = $_POST['active'];
            $current_image = $_POST['current_name'];

            if (isset($_FILES['image']['name'])) {
                $image_name = $_FILES['image']['name'];
                if ($image_name != "") {
                    $ext = end(explode('.', $image_name));
                    $image_name = "food_" . rand(0000, 9999) . '.' . $ext;
                    $src = $_FILES['image']['tmp_name'];
                    $dst = "../image/food/" . $image_name;
                    $upload = move_uploaded_file($src, $dst);
                    if ($upload == false) {
                        $_SESSION['upload'] = "<div class='error>failed to upload new image</div>";
                        header('location:' . SITE_URL . 'admin/food.php');
                        die();
                    }

                    // remove current image 
                    if ($current_image != "") {
                        $remove_path = "../image/food/" . $current_image;
                        $remove = unlink($remove_path);
                        if ($remove == false) {
                            $_SESSION['remove-failed'] = "<div class='error'>failed to remove current image</div>";
                            header('location:' . SITE_URL . 'admin/food.php');
                            die();
                        }
                    }
                }
            } else {
                $image_name = $current_image;
            }
        } else {
            $image_name = $current_image;
        }
        $sql3 = "update food set title='$title', description='$description',
                price=$price, img_name='$image_name', feature='$featured', active='$active' where id=$id";
        $res3 = mysqli_query($conn, $sql3);
        if ($res3 == true) {
            $_SESSION['update'] = "<div class='success'>food updated</div>";
            header('location:' . SITE_URL . 'admin/food.php');
        } else {
            $_SESSION['update'] = "<div class='error'>failed to update</div>";
            header('location:' . SITE_URL . 'admin/food.php');
        }


        ?>
    </div>
</div>


<?php include('partials/footer.php'); ?>