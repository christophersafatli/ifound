<?php 	
		$user_id = $_SESSION['id'];
		
	if(!empty($_POST['email']) && isset($_POST['email']) &&  !empty($_POST['phone']) &&  isset($_POST['phone'])&&  !empty($_POST['address']) &&  isset($_POST['address'])){
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$phone = mysqli_real_escape_string($con, $_POST['phone']);
		$address = mysqli_real_escape_string($con, $_POST['address']);
			mysqli_query($con,"UPDATE user SET us_email = '$email', us_phone = '$phone', us_address='$address' WHERE us_id ='$user_id'");
	}
?>



