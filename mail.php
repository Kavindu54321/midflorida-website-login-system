<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST["send"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Save email and password in session
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;

    // Generate OTP
    $otp = rand(100000, 999999);
    $_SESSION['otp'] = $otp;

    // Send OTP Email
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'your emaill';  // Your Gmail
        $mail->Password   = 'your password';     // App password
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;

        $mail->setFrom('your email', 'Your App Name');
        $mail->addAddress($email);

        $mail->isHTML(true);
        $mail->Subject = 'Your OTP Code';
        $mail->Body    = "<h3>Your OTP Code is: <b>$otp</b></h3>";

        $mail->send();

        // Redirect to OTP page
        header("Location: otpmail.php");
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
