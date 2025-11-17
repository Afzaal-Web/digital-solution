<?php
// Minimal PHPMailer test script
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);
try {
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = 'html';
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'etech.afzaal@gmail.com'; // Your Gmail address
    $mail->Password = 'cble xmvu mhiw xdcp'; // Gmail App Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('etech.afzaal@gmail.com', 'Website Contact');
    $mail->addAddress('afzaalbscs240@gmail.com', 'Customer Service');
    $mail->Subject = 'PHPMailer Test';
    $mail->Body = 'This is a test email from PHPMailer.';

    $mail->send();
    echo 'Test email sent successfully!';
} catch (Exception $e) {
    echo 'Test email could not be sent. Error: ' . $mail->ErrorInfo;
}
?>
