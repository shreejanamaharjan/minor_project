<?php include('partials/menu.php') ?>
<style>
    .tbl{
        font-size: small;
        
    }

    
    
</style>

<!-- main section -->
<div class="main">
    <div class="wrapper">
        <h1>MANAGE ORDER</h1><br>
        <?php
        if(isset($_SESSION['update'])){
            echo $_SESSION['update'];
            unset($_SESSION['update']);
        }
        ?><br>
        <!-- button to add admin  -->
        <a href="<?php echo SITE_URL; ?>admin/add-food.php" class="btn-primary">add food</a><br><br>
        
        <table class="tbl">
            <tr>
                <th>S.N.</th>
                <th>Food</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Additional</th>
                <th>Total</th>
                <th>Order Date</th>
                <th>Status</th>
                <th>Customer name</th>
                <th>Customer conatct</th>
                <th>email</th>
                <th>Customer address</th>
                <th>Action</th>
                
            </tr>
            <?php
            $sql = "select * from nepali_table order by id desc";
            $res = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($res);
            $sn=1;
            if ($count > 0) {
                while ($row = mysqli_fetch_assoc($res)) {
                    $id = $row['id'];
                    $food = $row['food'];
                    $price = $row['price'];
                    $qty=$row['quantity'];
                    $additional=$row['additional'];
                    $total=$row['total'];
                    $order_date=$row['order_date'];
                    $status=$row['status'];
                    $customer_name=$row['customer_name'];
                    $customer_contact=$row['customer_contact'];
                    $customer_email=$row['customer_email'];
                    $customer_address=$row['customer_address'];
                   
            ?>
                    <tr>
                        <td><?php echo $sn++;?></td>
                        <td><?php echo $food;?></td>
                        <td><?php echo $price;?></td>
                        <td><?php echo $qty;?></td>
                        <td><?php echo $additional;?></td>
                        <td><?php echo $total;?></td>
                        <td><?php echo $order_date;?></td>
                        <td>
                            <?php echo $status;?>
                            
                        </td>
                        <td><?php echo $customer_name;?></td>
                        <td><?php echo $customer_contact;?></td>
                        <td><?php echo $customer_email;?></td>
                        <td><?php echo $customer_address;?></td>
                        
                        <td>
                            <a href="<?php echo SITE_URL;?>admin/update-order.php?id=<?php echo $id; ?>" class="btn-update">Update</a><br><br>
                            <a href="<?php echo SITE_URL;?>admin/delete-order.php?id=<?php echo $id; ?>" class="btn-delete">Delete</a>
                            
                        </td>
                    </tr>
                    
            <?php
                }
            } else {
                echo "<tr><td colspan='13' class='error'>order not available</td></tr>";
            }
            ?>



        </table>
    </div>

</div>

<?php include('partials/footer.php') ?>