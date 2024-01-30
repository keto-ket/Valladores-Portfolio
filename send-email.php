<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/Exception.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'tuvalladores@gmail.com'; // Gmail email address
        $mail->Password   = 'ansarapmo';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        //Recipients
        $mail->setFrom('your@example.com', 'Your Name');
        $mail->addAddress('recipient@example.com', 'Recipient Name');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body    = "Name: $name<br>Email: $email<br>Phone: $phone<br>Message: $message";

        // Send the email
        $mail->send();

        // Success response
        echo json_encode(['status' => 'success']);
    } catch (Exception $e) {
        // Error response
        echo json_encode(['status' => 'error', 'message' => $mail->ErrorInfo]);
    }
}
?>