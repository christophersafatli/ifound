<!DOCTYPE html">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- To ensure proper rendering and touch zooming --> <!-- To disable zooming capabilities on mobile devices by add user-scalable=no -->
		
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css" />
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css.map" />  
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css" /> 
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css.map" /> 
    <link rel="stylesheet" href="css/normalize.css"> <!-- For improved cross-browser rendering -->
    
    <!-- Login css -->   
    <link rel="stylesheet" href="css/login.css" />
    <!-- Registration css -->
    <link rel="stylesheet" href="css/registration_form.css">
           
</head>

<?php
	include 'php/connect.php';
	include ('php/check_active.php');

// LOGIN
if(isset($_GET['login']) == "failed") {
	print $_GET['cause'];
}
// END OF LOGIN
