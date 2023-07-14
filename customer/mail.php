<?php
// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Require the necessary PHPMailer files
require('PHPMailer/Exception.php');
require('PHPMailer/SMTP.php');
require('PHPMailer/PHPMailer.php');

// Create an instance of PHPMailer
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;    // Enable verbose debug output
    $mail->isSMTP();                         // Send using SMTP
    $mail->Host = 'smtp.gmail.com';           // Set the SMTP server to send through
    $mail->SMTPAuth = true;                   // Enable SMTP authentication
    $mail->Username = 'shreejana.191541@ncit.edu.np'; // SMTP username (your Gmail address)
    $mail->Password = 'password';        // SMTP password (your Gmail password)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption
    $mail->Port = 587;                        // TCP port to connect to (use 587 for TLS)

    // Recipients
    $mail->setFrom('shreejana.191541@ncit.edu.np', 'Mailer');
    $mail->addAddress('shreejana.maharjan61@gmail.com'); // Add a recipient email address

    // Content
    $mail->isHTML(true);                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body = 'This is the HTML message body <b>in bold!</b>';

    // Disable SSL certificate verification
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );

    // Send the email
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    // Display an error message if sending the email fails
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
