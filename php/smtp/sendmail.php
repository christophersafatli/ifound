<?php
function Send_Mail($to,$subject,$body)
{
require 'class.phpmailer.php';
$from       = "from@gmail.com";
$mail       = new PHPMailer();
$mail->IsSMTP(true);            // use SMTP
$mail->IsHTML(true);
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Host       = "mail.in2host.net"; // Amazon SES server, note "tls://" protocol
$mail->Port       =  25;                    // set the SMTP port
$mail->Username   = "solutions@in2host.net";  // SMTP  username
$mail->Password   = "solutions12345";  // SMTP password
$mail->SetFrom($from, 'From Name');
$mail->AddReplyTo($from,'From Name');
$mail->Subject    = $subject;
$mail->MsgHTML($body);
$address = $to;
$mail->AddAddress($address, $to);
$mail->Send();   
}
?>
