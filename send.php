<?php
require_once 'vendor/autoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                 // Specify main and backup server
$mail->Port = 465;                                    // Set the SMTP port
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'EMAIL A RAJOUTER';                // SMTP username
$mail->Password = 'MDP A RAJOUTER';                  // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'CA JE SAIS PAS SI CA MARCHE';
$mail->FromName = 'Your From name';
$mail->AddAddress('ADRESSE A RAJOUTER', 'Benjamin Darcet');  // Add a recipient
               // Name is optional

$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <strong>in bold!</strong>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->Send()) {
 echo 'Message could not be sent.';
 echo 'Mailer Error: ' . $mail->ErrorInfo;
 exit;
}

echo 'Message has been sent';

?>
