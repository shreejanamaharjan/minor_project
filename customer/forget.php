<?php include('../config/constant.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reset password</title>
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

if (isset($_POST['forget_password'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['npassword']));
    $confirm_password = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
    $code = mysqli_real_escape_string($conn, md5(rand()));

    if (mysqli_num_rows(mysqli_query($conn, "SELECT * FROM customer_login WHERE email='{$email}'")) > 0) {
        if ($password === $confirm_password) {
            $sql = "UPDATE customer_login SET
             code='{$code}',
             password= '{$confirm_password}' WHERE email='{$email}'";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "<div style='display: none;'>";
                //Create an instance; passing `true` enables exceptions
                $mail = new PHPMailer(true);

                try {
                    //Server settings
                    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                    $mail->isSMTP();                                            //Send using SMTP
                    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $mail->Username   = 'shreejana.191541@ncit.edu.np';                     //SMTP username
                    $mail->Password   = '3123$aarunya!';                               //SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
                    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                    //Recipients
                    $mail->setFrom('shreejana.191541@ncit.edu.np');
                    $mail->addAddress($email);

                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'no reply';
                    $mail->Body    = 'Here is the verification link <b><a href= "http://localhost/minor_project/customer/login.php?verification=' . $code . '">http://localhost/minor_project/customer/login.php?verification=' . $code . '</a></b>';

                    // Disable SSL certificate verification
                    $mail->SMTPOptions = array(
                        'ssl' => array(
                            'verify_peer' => false,
                            'verify_peer_name' => false,
                            'allow_self_signed' => true
                        )
                    );
                    $mail->send();
                    echo 'Message has been sent';
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
                echo "</div>";
                $msg = "<div class='success'>We've send a verification link on your email address.</div>";
            } else {
                $msg = "<div class='error'>Something wrong went.</div>";
            }
        } else {
            $msg = "<div class='error'>Password and Confirm Password do not match</div>";
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

            <!-- forget password form -->
            <div class="form-box_forgetpassword">
                <div class="logreg-title">
                    <i class="bx bx-user-circle"></i>
                    <p>couldn't login to your account?</p>
                    <?php echo $msg; ?>
                </div>
                <form action="#" method="post">
                    <div class="input-box">
                        <span class="icon"><i class="bx bxs-envelope"></i></span>
                        <input type="email" name="email" value="<?php if (isset($_POST['forget_password'])) {
                                                                    echo $email;
                                                                } ?>" required />
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class="bx bxs-lock-alt"></i></span>
                        <input type="password" name="npassword" required />
                        <label> New password</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class="bx bxs-lock-alt"></i></span>
                        <input type="password" name="cpassword" required />
                        <label>Confirm password</label>
                        
                    </div>

                    <button type="submit" class="btn" name="forget_password">submit</button>

                    <div class="logreg-link">
                        <p>
                            create account. <a href="register.php" class="create-link">Register</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>