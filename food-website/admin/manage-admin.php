<?php include('partials/menu.php') ?>
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
        <h1>ADMIN</h1><br>
        <?php
        if (isset($_SESSION['ADD'])) {
            echo $_SESSION['ADD'];
            unset($_SESSION['ADD']);
        }
        if(isset($_SESSION['delete'])){
            echo $_SESSION['delete'];
            unset($_SESSION['delete']);
        }
        if(isset($_SESSION['update'])){
            echo $_SESSION['update'];
            unset($_SESSION['update']);
        }
        if(isset($_SESSION['user-not-found'])){
            echo $_SESSION['user-not-found'];
            unset($_SESSION['user-not-found']);
        }
        if(isset($_SESSION['pwd-not-matched'])){
            echo $_SESSION['pwd-not-matched'];
            unset($_SESSION['pwd-not-matched']);
        }
        if(isset($_SESSION['changed'])){
            echo $_SESSION['changed'];
            unset($_SESSION['changed']);
        }
       
        ?><br><br>
        <!-- button to add admin  -->
        <a href="add-admin.php" class="btn-primary">add admin</a><br><br>
        <table class="tbl">
            <tr>
                <th>S.N.</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Action</th>
            </tr>
            <?php
            $sql = "select * from admin";
            $res = mysqli_query($conn, $sql);
            if ($res == TRUE) {
                $count = mysqli_num_rows($res);
                $sn = 1;
                if ($count > 0) {
                    while ($rows = mysqli_fetch_assoc($res)) {
                        $id = $rows['id'];
                        $full_name = $rows['full_name'];
                        $username = $rows['username'];
            ?>
                        <tr>
                            <td><?php echo $sn++; ?></td>
                            <td><?php echo $full_name; ?></td>
                            <td><?php echo $username; ?></td>
                            <td>
                                <a href="<?php echo SITE_URL;?>admin/update-password.php?id=<?php echo $id;?>" class="btn-primary">change password</a>
                                <a href="<?php echo SITE_URL;?>admin/update.php?id=<?php echo $id;?>" class="btn-update">Update</a>
                                <a href="<?php echo SITE_URL;?>admin/delete.php?id=<?php echo $id;?>" class="btn-delete">Delete</a>
                            </td>
                        </tr>

            <?php

                    }
                } else {
                }
            }
            ?>







        </table>
    </div>

</div>

<?php include('partials/footer.php') ?>