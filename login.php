<title>Welcome to ifound - Sign In</title>
	<?php
		include("ssi/rl_header.php")
	?>

<!-- CONTAINER -->
<div class="container">
	<!-- FIRST ROW -->
	<div class="row">
		<div class=".col-md-7">
			<img src="img/logo.png" class="logo"/> <!-- logo -->
			<hr/> <!-- the break -->
		</div>
	</div>
	<!-- END FIRST ROW -->
	
	<!-- SECOND ROW -->
	<div class="row">
		<!-- FORM -->
		<div class=".col-md-5">
				<form class="form-container signin-layout" name="login_form" method="post" action="php/log.php">
					<div class="form-title"><h2>Sign in</h2></div>
						<input type="hidden" name="action" id="action" value="login"/>
						<input class="form-field-email" type="text" name="email" placeholder="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'email'"/><br />
						<input class="form-field-password" type="password" name="pwd" placeholder="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'password'"/><br />
						<a href="register.php" class="create-account">Create an account</a> 
					<div class="submit-container" style="float:right;">
						<input class="submit-button" type="submit" value="Submit" />
						<div style="float: right;">
						</div>						
					</div>
				</form>
				
		<!-- END FORM -->
		</div>
	</div>
	<!-- END SECOND ROW -->
	<p class="activation"><?php echo $msg; ?></p> <!-- message retrieval -->
	
</div>	
<!-- END CONTAINER -->

<?php
	include("ssi/rl_footer.php")
?>


