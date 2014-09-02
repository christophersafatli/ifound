<?php
// ACTIVATION
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
			$msg ="Account already active";
    	}
	
    }
    else
    {
		$msg ="Wrong activation code.";
    }

}
// END ACTIVATION
?>