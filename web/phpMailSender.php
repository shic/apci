<?php

/*
  require_once('class.phpmailer.php');
  include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

  $mail = new PHPMailer();

  $mail->IsSMTP(); // telling the class to use SMTP
  $mail->Host = "mail.hotmail.com"; // SMTP server
  $mail->SMTPDebug = 1;                     // enables SMTP debug information (for testing)
  // 1 = errors and messages
  // 2 = messages only


  $mail->SetFrom('apcitalia@hotmail.com', 'apci italia'); // FROM
  $mail->AddReplyTo('acpitaly@gmail.com', 'APCI'); // Reply TO


  $mail->Subject = "APCI Registration Mail";

  $mail->Body = $message;
  $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
  $mail->MsgHTML($message);


  $recipiant = $_GET["email"];
  $mail->AddAddress($recipiant, "jone nash");


  if (!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
  } else {
  echo "Message sent!";
  }
 * */






require("class.phpmailer.php");
include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail = new PHPMailer();

$mail->IsSMTP();  // telling the class to use SMTP
$mail->Host = "smtp.hotmail.com"; // SMTP server

$mail->From = "apcitalia@hotmail.com";
$mail->AddAddress("acpitaly@gmail.com");

$mail->Subject = "An HTML Message";
$mail->Body = "Hello, <b>my friend</b>! \n\n This message uses HTML entities!";


  if (!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
  } else {
  echo "Message sent!";
  }
?>
    