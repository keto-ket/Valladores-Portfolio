<?php


    use PHPMailer\PHPMailer\Exception;

    use PHPMailer\PHPMailer\PHPMailer;

    use PHPMailer\PHPMailer\SMTP;


    require 'PHPMailer\src\Exception.php';

    require 'PHPMailer\src\PHPMailer.php';

    require 'PHPMailer\src\SMTP.php';


    require 'config.php';

    
    function sendMail($email, $subject, $message){

        $mail = new PHPMailer(true);

        $mail->isSMTP();

        $mail->SMTPAuth = True;

        $mail->Host = MAILHOST;

        $mail->Username = USERNAME;

        $mail->Password = PASSWORD;

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

        $mail->Port = 587;

        $mail->setFrom(SEND_FORM, SEND_FROM_NAME);

        $mail->addAddress($email);

        $mail->addReplyTo(REPLY_TO, REPLY_TO_NAME);

        $mail->IsHTML(true);

        $mail->Subject = $subject;

        $mail->Body = $message;

        $mail->AltBody = $message;

        if(!$mail->send()){
            return "Email not sent, Please Try again";
        }else{
            return "Email Sent Successfully!";
        }
    }