<?php
require 'phpmailer\PHPMailerAutoload.php';
require 'phpmailer\credential1.php';
require 'phpmailer\class.phpmailer.php';
require 'phpmailer\class.smtp.php';
$mail = new phpmailer;

//$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = EMAIL;                 // SMTP username
$mail->Password = PASS;                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom(EMAIL, $_POST['name']);
$mail->addAddress(EMAIL);     // Add a recipient
                                       // Name is optional
$mail->addReplyTo($_POST['email']);


//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject ='Feedback mail.';
$mail->Body  =($_POST['comments']);
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent!!!<br><br>Please go to back.';
}
?>