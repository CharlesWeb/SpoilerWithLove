<?php
require_once 'vendor/autoload.php';

if(isset($_POST['submit'])){
    $dest_mail = htmlspecialchars(trim($_POST['email']));
    var_dump($dest_mail);

    $mail = new PHPMailer;

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                 // Specify main and backup server
    $mail->Port = 465;                                    // Set the SMTP port
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'nospoilwithlove@gmail.com';                // SMTP username
    $mail->Password = 'jorbencha';                  // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted

    $mail->From = 'nospoilwithlove@gmail.com';
    $mail->FromName = 'Your From name';
    $mail->AddAddress($dest_mail);  // Add a recipient
                   // Name is optional

    $mail->IsHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Petit cadeau d\'un ami';
    $mail->Body    = 'This is the HTML message body <strong>in bold!</strong>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if(!$mail->Send()) {
     echo 'Message could not be sent.';
     echo 'Mailer Error: ' . $mail->ErrorInfo;
     exit;
    }

    echo 'Message has been sent';

  }

?>
