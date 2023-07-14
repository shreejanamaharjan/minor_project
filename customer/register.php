<?php include('../config/constant.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="login.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>
<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
require('PHPMailer/Exception.php');
require('PHPMailer/SMTP.php');
require('PHPMailer/PHPMailer.php');
$msg = "";
if (isset($_POST['register'])) {
    $name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $code = md5(rand());
    $register_date = date("Y-m-d h:i:sa");
    if (strlen($name) < 3) {
        $_SESSION['full_name'] = "<div class='error'>name too short</div>";
    } else if (mysqli_num_rows(mysqli_query($conn, "select * from customer_login where email='{$email}'")) > 0) {
        // $msg = "<div class='error'>This email has been already exists.</div>";
        $_SESSION['mail'] = "<div class='error'>This email has been already exists.</div>";
    }
    // else if(strlen($password)<3){
    //     $_SESSION['password'] = "<div class='error'>invalid password</div>";

    // }
    else {


        $sql1 = "insert into customer_login set
        full_name = '$name',
        email = '$email',
        password = '$password',
        code = '$code',
        register_date = '$register_date' ";

        $res1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));

        if ($res1 == TRUE) {
            echo "<div style='display: none;'>";
            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.office365.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                             //Enable SMTP authentication
                $mail->Username   = 'shreejana.maharjan61@gmail.com';                     //SMTP username
                $mail->Password   = 'qhgvratbaafbqslv';                                 //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
                $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipientsshreejana.maharjan61@gmail.com
                $mail->setFrom('shreejana.maharjan61@gmail.com');
                $mail->addAddress($email);     //Add a recipient
               

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'no_reply';
                $mail->Body    = 'Here is the verification link <b><a href= "http://localhost/minor_project/customer/?verification='.$code.'">http://localhost/minor_project/customer/?verification='.$code.'</a></b>';
               

                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
            echo "</div>";
            $msg = "<div class='success'>We've sent email verification to your email.</div>";
            // $_SESSION['customer_register'] = "<div class='success'>We've sent email vrification to your email.</div>";
            // header("location:" . SITE_URL . 'customer/register.php');
        } else {

            $msg = "<div class='success'>something went wrong. </div>";
        }
    }
}

?>

<body>


    <div class="wrapper">
        <div class="logo">
            <p>Nepali<span>Spice</span></p>
        </div>

        <div class="logreg-box">
            <div class="form-box_register">
                <div class="logreg-title">
                    <h2>Registration</h2>
                    <p>Please provide the following to verify your identity</p>
                    <?php
                    // if (isset($_SESSION['customer_register'])) {
                    //     echo $_SESSION['customer_register'];
                    //     unset($_SESSION['customer_register']);
                    // }
                    echo $msg;
                    ?>
                </div>
                <form action="#" method="POST">
                    <div class="input-box">
                        <span class="icon"><i class="bx bxs-user"></i></span>
                        <input type="text" name="full_name" value="<?php if (isset($_POST['register'])) {
                                                                        echo $name;
                                                                    } ?>" required />
                        <label>Full Name</label>
                        <?php
                        if (isset($_SESSION['full_name'])) {
                            echo $_SESSION['full_name'];
                            unset($_SESSION['full_name']);
                        }
                        ?>

                    </div>
                    <div class="input-box">
                        <span class="icon"><i class="bx bxs-envelope"></i></span>
                        <input type="email" name="email" value="<?php if (isset($_POST['register'])) {
                                                                    echo $email;
                                                                } ?>" required />
                        <label>Email</label>
                        <?php
                        if (isset($_SESSION['mail'])) {
                            echo $_SESSION['mail'];
                            unset($_SESSION['mail']);
                        }
                        ?>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class="bx bxs-lock-alt"></i></span>
                        <input type="password" name="password" required />
                        <label>Password</label>
                        <?php
                        if (isset($_SESSION['password'])) {
                            echo $_SESSION['password'];
                            unset($_SESSION['password']);
                        }
                        ?>
                    </div>
                    <div class="remember-forget">
                        <label><input type="checkbox" /> agree to the terms &
                            conditions</label>
                    </div>

                    <button type="submit" class="btn" name="register">Register</button>

                    <div class="logreg-link">
                        <p>
                            already have a account?
                            <a href="login.php" class="login-link">Login</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>


    </div>







</body>

</html>