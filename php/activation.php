<?php
include 'connect.php';

$msg='';
if(!empty($_GET['code']) && isset($_GET['code']))
{
	$code=mysql_real_escape_string($_GET['code']);
	
	$c=mysqli_query($con,"SELECT us_id FROM user WHERE activation='$code'");
	
	if(mysqli_num_rows($c) > 0)
	{
		$count=mysqli_query($con,"SELECT us_id FROM user WHERE activation='$code' and status='0'");
		
		if(mysqli_num_rows($count) == 1)
		{
	    	mysqli_query($con,"UPDATE user SET status='1' WHERE activation='$code'");
	    	$msg="Your account is activated";	
	    }
   		else
    	{
			$msg ="Your account is already active, no need to activate again";
    	}
	
    }
    else
    {
		$msg ="Wrong activation code.";
    }

}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>PHP Email Verification Script</title>
<link rel="stylesheet" href="../css/style.css"/>
</head>
<body>
	<div id="main">
	<h2 style="color:#79941f;"><?php echo $msg; ?></h2>
	</div>
</body>
</html>
