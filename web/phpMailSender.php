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



/* These will gather what the user has typed into the fieled. */

$name = $_POST['name'];
$email = $_POST['email'];
$question = $_POST['question'];

/* These are the variable that tell the subject of the email and where the email will be sent. */

$emailSubject = 'Recupero password LightSchool';
$mailto = $_POST['email'];
$mail->From = 'apcitalia@hotmail.com';
$mail->FromName = 'Mailer';

/* This takes the information and lines it up the way you want it to be sent in the email. */

$body = '<br><hr><br> Name: ' . $name . ' <br> Email: ' . $email . ' <br> Question: ' . $question . ' <br>';

$headers = "From: $email\r\n"; // This takes the email and displays it as who this email is from.
$headers .= "Content-type: text/html\r\n"; // This tells the server to turn the coding into the text.
$success = mail($mailto, $emailSubject, $body, $headers); // This tells the server what to send.
?>

