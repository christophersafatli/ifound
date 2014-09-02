<?php

//get current user info
$user_id = $_SESSION['id'];

$sqlString = "SELECT * FROM user WHERE us_id = '$user_id'";

   $result = mysqli_query($con, $sqlString);

   if ($result && mysqli_num_rows($result) > 0)
   {
       while ($row = mysqli_fetch_assoc($result)) 
       {
           $name = $row['us_name'];
           $phone = $row['us_phone'];
           $email = $row['us_email'];
           $address = $row['us_address'];
       }
   }

// $sqlString = "SELECT * FROM address WHERE add_id = '$address'";
// 
   // $result = mysqli_query($con, $sqlString);
// 
   // if ($result && mysqli_num_rows($result) > 0)
   // {
       // while ($row = mysqli_fetch_assoc($result))
       // {
           // $iso = $row['add_c_iso'];
           // $address = $row['add_address'];
       // }
   // }
// 
// $sqlString = "SELECT * FROM country WHERE c_iso_id = '$iso'";
// 
   // $result = mysqli_query($con, $sqlString);
// 
   // if ($result && mysqli_num_rows($result) > 0)
   // {
       // while ($row = mysqli_fetch_assoc($result))
       // {
           // $address = $row['c_name'];
       // }
	// }


?>