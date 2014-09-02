<?php
 
	include 'connect.php';

if($_POST['action'] == "login") {
	$email = $_POST['email'];
	$q_user = mysqli_query($con, "SELECT * FROM user WHERE us_email='$email'");
	//var_dump(mysqli_num_rows($q_user));
	//exit;
	if(mysqli_num_rows($q_user) == 1) {
	
		$query = mysqli_query($con, "SELECT * FROM user WHERE us_email='$email'");
		$data = mysqli_fetch_array($query);
		if($_POST['pwd'] == $data['us_pass']) {
			session_start();
			$_SESSION["name"] = $data['us_name'];
			$_SESSION["id"] = $data['us_id'];
			header("Location: ../index.php"); // The page redirected to
			exit;
		} else {
			header("Location: ../login.php?login=failed&cause=".urlencode('Wrong Password'));
			exit;
		}
	}
	else {
			header("Location: ../login.php?login=failed&cause=".urlencode('Invalid User'));
			exit;
	}

	// if the session is not registered
	if(session_is_registered($name) == false) {
		header("Location: ../login.php");
	}
}
?>