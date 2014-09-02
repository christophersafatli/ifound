<?php
	include("ssi/navbar_active.php");
	include("php/connect.php");
	include("php/log.php");
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<title></title>

	<!-- Set the viewport width to device width for mobile -->
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	
  	 <!-- Included Bootstrap CSS Files -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />

	<!-- Includes FontAwesome -->
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />

	<!-- Css -->
	<link rel="stylesheet" href="css/normalize.css">	
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/registration_form.css">
    
	<!-- Google Font -->
	<link href='http://fonts.googleapis.com/css?family=Economica:400,700,700italic' rel='stylesheet' type='text/css'>
     
 
</head>
<body>

		<!-- Navbar -->
	<div class="navbar-left">
		<ul class="nav">
			<!-- Home -->
			<li> 
				<a <?php echo $active;?>class="scroll enabled" href="./index.php" title="Home">
					<i class="icon-home"></i>
					<span class="arrow"> </span>
				</a>
			</li>
			<!-- END Home -->
			<!-- Profile -->
			<li>
				<a <?php echo $active1;?>class="scroll" href="./profile.php" title="Profile">
					<i class="icon-desktop"></i>
					<span class="arrow"> </span>
				</a>
			</li>
			<!-- END Profile -->			
			<!-- Items -->
			<li>
				<a <?php echo $active2;?>class="scroll" href="./item.php" title="Items">
					<i class="glyphicon glyphicon-qrcode"></i>
					<span class="arrow"> </span>
				</a>
			</li>
			<!-- END Items -->
			<!-- Depositories -->
			<li>
				<a <?php echo $active3;?>class="scroll" href="./depositories.php" title="Depositories">
					<i class="icon-group"></i>
					<span class="arrow"> </span>
				</a>
			</li>
			<!-- END Depositories -->
			<!-- Contact -->
			<li>
				<a <?php echo $active4;?>class="scroll" href="./contact.php" title="Contact">
					<i class="icon-envelope-alt"></i>
					<span class="arrow"> </span>
				</a>
			</li>
            <!-- END Contact -->
            <!-- Donate -->
            <li>
				<a <?php echo $active5;?>class="scroll" href="./donate.php" title="Donate">
					<i class="glyphicon glyphicon-usd"></i>
					<span class="arrow"> </span>
				</a>
			</li>
			<!-- END Donate -->
		</ul>
	</div>
	<!-- /Navbar -->