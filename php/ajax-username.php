<?php
include("connect.php");

$result = mysqli_query($con,"SELECT us_name FROM user");

$users = array();	

while($row = mysqli_fetch_array($result)) {
	array_push($users, $row["us_name"]);
}

sleep(2);

//echo json_encode( $users);

echo json_encode(! in_array($_POST['username'], $users));

exit;
?>