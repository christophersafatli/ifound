<?php
include("connect.php");

$result = mysqli_query($con,"SELECT us_email FROM user");

$user_email = array();	

while($row = mysqli_fetch_array($result)) {
	array_push($user_email, $row["us_email"]);
}

sleep(2);

//echo json_encode( $user_email);

echo json_encode(! in_array($_POST['email'], $user_email));

exit;
?>