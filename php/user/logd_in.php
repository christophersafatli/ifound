 <?php 
  	
  	if(isset($_SESSION['name'])){
  		echo '<table><tr><td><a class="btn btn-default login_1" href="#">'.$_SESSION['name'].'</a></td><td><p>&nbsp;&nbsp;<p></td><td><a href = "./php/user/logout.php" class="btn btn-default login_1">logout</a></td></tr></table>';
  	}
	else{
		echo '<table><tr><td><a href = "./login.php" class="btn btn-default login_1">login</a></td><td><p>&nbsp;&nbsp;<p></td><td><a class="btn btn-default login_1" href = "./register.php">Register</a></td></tr></table>';
	}
?>