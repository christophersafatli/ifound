<title>Profile</title>
<?php
	include ("./ssi/navbar.php");
	include ("php/user/get_user_info.php");
	include ("php/user/edit_profile.php");
?>

<!-- Profile -->

<div class="page center">

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><span>Profile</span></h1>

				<!-- Button trigger modal -->
				<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
					Edit
				</button>
				<!-- END Button trigger modal -->
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<!-- Modal -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
									&times;
								</button>
								<h4 class="modal-title" id="myModalLabel">Edit</h4>
							</div>
							<!-- body -->
							<div class="modal-body">
								<form id="contactForm" method="POST" class="form" action="profile.php">
									<div class="row">										
										<div class="col-md-2" style="margin-top: 8px;">
											Email
										</div>
										<div class="col-md-9">
											<div class="form-group">
												<input name="email" type="email" value="<?php echo $email; ?>" data-idealforms-ajax="php/ajax-email.php" class="col-md-8 form-control">
											</div>
										</div>										
									</div>
									<div class="row">										
										<div class="col-md-2" style="margin-top: 8px;">
											Phone
										</div>
										<div class="col-md-9">
											<div class="form-group">
												<input name="phone" type="text" value="<?php echo $phone; ?>" class="col-md-8 form-control">
											</div>
										</div>										
									</div>
									<div class="row">										
										<div class="col-md-2" style="margin-top: 8px;">
											Address
										</div>
										<div class="col-md-9">
											<div class="form-group">
												<input name="address" type="text" value="<?php echo $address; ?>" class="col-md-8 form-control">
											</div>
										</div>										
									</div>									
									<div class="form-group">
										<button class="btn-theme pull-left form-control">
											Submit
										</button>
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">
									Close
								</button>
							</div>
							<!--END body -->
						</div>
					</div>
				</div>
				<!-- END modal -->

				<hr>

				<!-- <?php
					if (isset($_SESSION['name'])) {
						echo '<a href="#">' . $_SESSION['name'] . '</a>';
						include("php/get_user_info.php");
					}
				?> -->

				<div class="row">
					<div class="col-md-4">
						<div class="profile-container">
							<div class="icons">
								<span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;<?php echo $name; ?>
							</div>
							<div class="icons">
								<span class="glyphicon glyphicon-phone-alt"></span>&nbsp;&nbsp;<?php echo $phone; ?>
							</div>
							<div class="icons">
								<span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;<?php echo $email; ?>
							</div>
							<div class="icons">
								<span class="glyphicon glyphicon-home"></span>&nbsp;&nbsp;<?php echo $address; ?>
							</div>
						</div>
					</div>


					</div>

					<!-- PAYPAL LINK -->
					<!-- <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="6931780">
					<input type="image" src="https://www.paypal.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form> -->
					<!-- END PAYPAL LINK -->
				</div>
			</div>
		</div>
	</div>
	<!-- END container -->
</div>
<!-- END page center -->

<!-- END Profile-->
<script src="js/jquery-1.9.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<?php
	include("ssi/rl_footer.php")
?>
</body>
</html>