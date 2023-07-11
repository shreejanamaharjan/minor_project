<?php include('partials/menu.php'); ?>
<style>
    form{
        text-align: center;
    width: 50%;
    margin: 0 auto;
    }
    form span{
        font-size: large;
    font-weight: bold;
    }
    form p{
       margin: 0 auto;
        font-size: medium;
    color: grey;
    background: #eee;
    width: 40%;
    text-align: center;
    }
    form select {
        width: 40%;
        font-size: medium;
        color: grey;
        background: #eee;

    }
    form input{
        background: #eee;
    text-align: center;
    
    width: 40%;
    font-size: medium;
    color: grey;
    padding: 1%;
    border-radius: 5px;
    }
</style>
<div class="main">
    <div class="wrapper">
        <h1>Update Order</h1><br><br>
        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "select * from nepali_table where id=$id";
            $res = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($res);
            if ($count == 1) {
                $row = mysqli_fetch_assoc($res);
                $food = $row['food'];
                $price = $row['price'];
                $qty = $row['quantity'];
                $status = $row['status'];
            } else {
                header('location:' . SITE_URL . 'admin/order.php');
            }
        } else {
            header('location:' . SITE_URL . 'admin/order.php');
        }
        ?>

        <form action="" method="post">
            <span>Food name:</span><br>
            <p><?php echo $food; ?></p><br><br>

            <span>Quantity:</span><br>
            <input type="number" name="quantity" value="<?php echo $qty; ?>"><br><br>

            <span>Price:</span><br>
            <p><?php echo 'Rs. '.$price; ?></p><br><br>

            <span>Status:</span><br>
            <select name="status">
                <option <?php if($status=="Ordered"){echo "selected";}?> value="ordered">Ordered</option>
                <option <?php if($status=="On Delivery"){echo "selected";}?> value="on delivery">On Delivery</option>
                <option <?php if($status=="Delivered"){echo "selected";}?> value="delivered">Delivered</option>
                <option <?php if($status=="Cancelled"){echo "selected";}?> value="cancelled">Cancelled</option>
            </select><br><br>
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <input type="hidden" name="price" value="<?php echo $price;?>">
            <input type="submit" name="submit" value="update order" class="btn-update">


        </form>
        <?php
        if(isset($_POST['submit'])){
            $id=$_POST['id'];
            $price=$_POST['price'];
            $qty=$_POST['quantity'];
            $total=$price*$qty;
            $status=$_POST['status'];

            $sql2 = "update  nepali_table set
            quantity=$qty,
            total=$total,
            status='$status'
            where id=$id
            ";
            $res2=mysqli_query($conn, $sql2);
            if($res2==true){
                $_SESSION['update'] = "<div class='success'>order update successfully</div>";
                header('location:'.SITE_URL.'admin/order.php');
            }else{
                $_SESSION['update'] = "<div class='error'>order not updateded<?div>";
                header('location:'.SITE_URL.'admin/order.php');
            }
        }
        ?>
    </div>
</div>


<?php include('partials/footer.php'); ?>