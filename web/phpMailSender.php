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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">  
    <head>  
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
        <title>MY Studenti</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>  
    <body style="background-image:url(http://studenti.lightschool.it/new/bkg.png)">  
        <div id="main">
            <h1>
                <img src="http://images.lightschool.it/logo/medium250x250.png" alt="" height="66" style="float: left; margin-right: 20px" width="62" />MY Studenti</h1>
            <p>Recupera password ti permette di recuperare la tua password, tramite 
                l'inserimento del tuo nome utente.</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <form id="form1" name="form1" method="post" action="phpMailSender.php">
                <table width="455" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="175" height="44" align="center"><label for="name">name</label></td>
                        <td width="280"><input name="name" type="text" id="name" size="30" />
                        </td>
                    </tr>
                    <tr>
                        <td height="45" align="center"><label for="email">email</label></td>
                        <td><input name="email" type="text" id="email" size="30" /></td>
                    </tr>
                    <tr>
                        <td height="41" align="center"><label for="question">question</label></td>
                        <td><textarea name="question" cols="30" rows="5" id="question"></textarea></td>
                    </tr>
                    <tr>
                        <td height="38">&nbsp;</td>
                        <td><label>
                                <input type="submit" name="Submit" id="Submit" value="Submit" />
                            </label></td>
                    </tr>
                </table>

            </form>
        </div>
    </body>
</html>

