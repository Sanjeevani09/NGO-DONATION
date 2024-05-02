<?php

if (isset($_POST['reset'])) {
  $email = $_POST['email'];
} else {
  exit();
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
  $mail->isSMTP();
  $mail->Host       = 'smtp.gmail.com';
  $mail->SMTPAuth   = true;
  $mail->Username   = 'neha71549@gmail.com';
  $mail->Password   = 'cjlmwajabjboyelm';
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
  $mail->Port       = 465;

  $mail->setFrom('neha71549@gmail.com', 'Admin');
  $mail->addAddress($email);

  $code = substr(str_shuffle('1234567890QWERTYUIOPASDFGHJKLZXCVBNM'), 0, 10);

  $mail->isHTML(true);
  $mail->Subject = 'Reset Password';
  $mail->Body    = 'To reset you password click <a href="http://localhost/Project/change_password.php?code=' . $code . '">here </a>. <br>Reset your password in a day.';

  include '_dbconnect.php';
  $verifyQuery = $conn->query("SELECT * FROM users WHERE email = '$email'");

  if ($verifyQuery->num_rows) {
    $codeQuery = $conn->query("UPDATE users SET code ='$code' WHERE email='$email'");

    $mail->send();
    echo '<script>alert("Message has been sent, Please check your E-mail.");</script>';
    header("location: forgot_password.php");
  }

  $conn->close();
} catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
