<title>Contact Us</title>
<?php
	include ("./ssi/navbar.php"); // navbar
?>

	
    <!-- Contact -->
	<div id="page5" class="page">
		<div class="container">
			<div class="row">
				<div class="col-md-12 center">
					<h1><span><i class="icon-envelope-alt"></i>&nbsp;Contact Us</span></h1>
					<h3>write us  for everything you want to ask, we will be glad to answer you.</h3>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<h3>&nbsp;Location and Contacts</h3>
					<p>
						<i class="icon-map-marker"></i>&nbsp;
						Nore Dame University, Zouk
					</p>
					<p>
						<i class="icon-phone"></i>&nbsp;
						Phone: +961 3 357 151
					</p>
					<p>
						<i class="icon-print"></i>&nbsp;
						Fax: +961 9 620 138
					</p>
					<p>
						<i class="icon-envelope"></i>&nbsp;
						Email: csafatli@gmail.com
					</p>
					<p>
						<i class="icon-globe"></i>&nbsp;
						Web: http://www.ifound.com
					</p>

				</div>
				<div id="responsemsg"></div> <!-- The response message that will notify if successful/not -->	
				<div class="col-md-8 center">
					<form id="frmInputData"  method="post" action="php/smtp/sendmail_contactus.php">
						<div class="form-group">
							<input id="ContactEmail" name="email" type="text" placeholder="Email" class="col-md-8 form-control" />
						</div>
						<div class="form-group">
							<input id="ContactLastName" name="phone" type="text" placeholder="Phone" class="col-md-8 form-control" />
						</div>
						<div class="form-group">
							<textarea id="ContactMessage" name="comments" placeholder="Comments" class="col-md-8 form-control" rows="10"></textarea>
						</div>
						<div class="form-group">
							<button class="btn-theme pull-left form-control">Send</button>
						</div>
					</form>
				</div>
			</div>
		</div>

	</div>
	<!-- /Contact -->

<script>
	$(document).ready(function(e) {
	$("#frmInputData").submit(function(event) { 
		event.preventDefault();
		
		// For the submit	
		var serializedData = $("#frmInputData").serialize();
		
		$.ajax({
		  type: "POST",
		  url: "php/smtp/sendmail_contactus.php",
		  data: serializedData,
		  success: function(msg) {
			//alert( msg );
			$("#responsemsg").html(msg);
			$("#frmInputData")[0].reset();
			}
		});
			
			
		});
	});
</script>

	<script src="js/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
