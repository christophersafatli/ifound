<?php
require 'PHPMailerAutoload.php';
include ("../connect.php");

$loc_id = $_POST['locid'];
$item_id = $_POST['itemid'];

if($loc_id == 1) $location="AUB Hamra";
if($loc_id == 2) $location="NDU Zouk"; 
if($loc_id == 3) $location="LAU Byblos";


mysqli_query($con,"INSERT INTO dep (loc_id,item_id)
					VALUES ('$loc_id','$item_id')");	

$result = mysqli_query($con,"SELECT * FROM items WHERE it_id='$item_id'");

while ($row = mysqli_fetch_array($result, MYSQL_NUM)) {
    	$user_id = $row[1];
		$result = mysqli_query($con,"SELECT * FROM user WHERE us_id='$user_id'");
		while ($row = mysqli_fetch_array($result, MYSQL_NUM)) {
				//printf("Name: %s Email: %s",$row[3], $row[7]);
				$email = $row[7];
				$name = $row[3];
				
				
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
				$mail->addAddress($email, $name);
				$mail->CharSet = 'UTF-8';
				//$mail->addAddress('');               // Name is optional
				//$mail->addReplyTo('', '');
				//$mail->addCC('');
				//$mail->addBCC('');
				
				//$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
				// $mail->addAttachment('img/logo.png');         // Add attachments
				//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
				$mail->isHTML(true);                                  // Set email format to HTML
				
				$mail->Subject = 'Application Submitted from Website';
				$mail->Body    = '<h2 style = "color:#8b9a5c;">Your item has been found, and will be placed at: '.$location.'</h2>';
				;
				//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
				
				if(!$mail->send()) {
				   echo 'Message could not be sent.';
				   echo 'Mailer Error: ' . $mail->ErrorInfo;
				   exit;
				}
				
				echo '<h2 style ="color:#abc852;font-size: 3em;">Thank you for using iFound!<h2><img src="../../img/logo.png" style="width:180px;"/>';
								
				
		}
}

?>
