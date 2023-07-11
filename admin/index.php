<?php include('partials/menu.php')?>
<style>
    .main{
        padding-top: 2%;
    padding-bottom: 2%;
    background-color: rgb(219, 232, 244);
    position: absolute;
    height: 100%;
    width: 100%;
    }
    .footer{
    position: fixed;
    bottom: 0;
    
    width: 100%;
}
</style>

    <!-- main section -->
    <div class="main">
        <div class="wrapper">
            <h1>DASHBOARD</h1><br><br>
            <?php
        if(isset($_SESSION['login'])){
            echo $_SESSION['login'];
            unset($_SESSION['login']);
        }
        ?><br><br>
            <div class="col">
                <?php
                $sql="select * from food";
                $res=mysqli_query($conn, $sql);
                $count=mysqli_num_rows($res);
                ?>
                <h1><?php echo $count;?></h1>
                Food
            </div>

            <div class="col">
            <?php
                $sql2="select * from nepali_table";
                $res2=mysqli_query($conn, $sql2);
                $count2=mysqli_num_rows($res2);
                ?>
                <h1><?php echo $count2?></h1>
                Total Order
            </div>

            <div class="col">
            <?php
                $sql3="select sum(total) as Total from nepali_table";
                $res3=mysqli_query($conn, $sql3);
                $row3=mysqli_fetch_assoc($res3);
                $total_revenue=$row3['Total'];
            ?>
                <h1><?php echo $total_revenue; ?></h1>
                Revenue generated
            </div>
            <div class="clearfix"></div>
        </div>

    </div>

    <?php include('partials/footer.php')?>