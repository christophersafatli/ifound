<?php
require 'PHPMailerAutoload.php';

$email = $_POST['email'];
$phone = $_POST['phone'];
$comments = $_POST['comments'];

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
//$mail->Host = 'mail.in2uitions.com';  // Specify main and backup server
$mail->Host = 'mail.in2host.net';
$mail->SMTPAuth = true;
$mail->Port = 25;                             // Enable SMTP authentication
$mail->Username = 'solutions@in2host.net';                            // SMTP username
$mail->Password = 'solutions12345';                           // SMTP password
$mail->SMTPSecure = 'none';                            // Enable encryption, 'ssl' also accepted

$mail->From = $email;
$mail->FromName = $username;
$mail->addAddress('', '');  // Add a recipient
$mail->addAddress('csafatli@gmail.com', 'Christopher Safatli');
$mail->CharSet = 'UTF-8';
//$mail->addAddress('');               // Name is optional
//$mail->addReplyTo('', '');
//$mail->addCC('');
//$mail->addBCC('');

//$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Application Submitted from Website';
$mail->Body    = '<h2>Email Address: '.$email.'</h2><h3>Phone Number: '.$phone.'</h3><h1>Comments: '.$comments.'</h1>';
;
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo '<h2 style ="color:#abc852;">Message has been sent!<h2><img src="../../img/logo.png" style="width:127px;"/>';
?>
