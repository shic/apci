<?php
    require("class.phpmailer.php");
include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

    $mail = new PHPMailer();

    $recipiant = $_GET["email"];
    $message = $_GET["message"];

    $mail->IsSMTP();  // telling the class to use SMTP
    $mail->SMTPAuth   = true; // SMTP authentication
    $mail->Host       = "smtp.hotmail.com"; // SMTP server
    $mail->Port       = 465; // SMTP Port
    $mail->SMTPSecure = 'ssl';
    $mail->Username   = "apcitalia@hotmail.com"; // SMTP account username
    $mail->Password   = "Apci2014";        // SMTP account password



    $mail->SetFrom('apcitalia@hotmail.com', 'apci-italia.it'); // FROM
    $mail->AddReplyTo('acpitaly@gmail.com', 'APCI'); // Reply TO

    $mail->AddAddress($recipiant, ''); // recipient email

    $mail->Subject    = "Registration Mail"; // email subject
    $mail->Body       = $message;



    if(!$mail->Send()) {
      echo 'Message was not sent.';
      echo 'Mailer error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent.';
    }
    


?>
    