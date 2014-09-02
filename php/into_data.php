<?php 	
	
	include("connect.php");
		
	$base_url='localhost:8888/MAMP/www/ifound/'; // for the link of the sent message

	if(!empty($_POST['email']) && isset($_POST['email']) &&  !empty($_POST['password']) &&  isset($_POST['password'])){
		$username = mysqli_real_escape_string($con, $_POST['username']);
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$password = mysqli_real_escape_string($con, $_POST['password']);
		$phone = mysqli_real_escape_string($con, $_POST['phone']);
		$gender = mysqli_real_escape_string($con, $_POST['gender']);
		$date = mysqli_real_escape_string($con, $_POST['date']);
		
		$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/';
		
		$sql="INSERT INTO user (us_name,us_email,us_pass,us_phone,us_gender,us_bdate)
		VALUES ('$username','$email', '$password','$phone','$gender','$date')";
		
		if(preg_match($regex, $email)) {
			$password=md5($password); // encrypted password
			$activation=md5($email.time()); // encrypted email+timestamp
			$count=mysqli_query($con,"SELECT us_id FROM user WHERE us_email='$email'");
			// email check
			
		if(mysqli_num_rows($count) < 1)
		{
			mysqli_query($con,"INSERT INTO user (us_name,us_email,us_pass,us_phone,us_gender,us_bdate, activation)
				VALUES ('$username','$email', '$password','$phone','$gender','$date','$activation')");
			// sending email
			include 'smtp/sendmail.php';
			$to=$email;
			$subject="Email verification";
			$body='Hello, <br/> <br/> Please do verify your account <br/> <br/> <a href="'.$base_url.'login.php?code='.$activation.'">'.$base_url.'login.php?code='.$activation.'</a>';
			Send_Mail($to,$subject,$body);
			$msg= "Registration successful, please activate email."; 
			}
			else
			{
			$msg= 'The email is already taken, please try new.'; 
			}
		}
			else
			{
			$msg = 'The email you have entered is invalid, please try again.'; 
			}
		}
		
					
?>



