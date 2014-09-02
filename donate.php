<title>Donate</title>
<?php
	include ("./ssi/navbar.php");
?>    
    <!-- Donate-->
	<div id="page3" class="page center">
		<div class="container">
			<div class="row">
				<div class="col-md-12" style="margin-right:1.3em">
					<h1 style="display: inline;">
						<small><i class="glyphicon glyphicon-usd" ></i></small> Donate 
					</h1> 
                    <hr>
                    <div class="col-md-4">
                    	
                    </div>
							<div class="col-md-5 .pull-right">
                               <form id="contactForm" class="form">
						<div class="form-group">
							<input id="ContactFirstName" name="ContactFirstName" type="text" placeholder="First Name" class="col-md-8 form-control" />
						</div>
						<div class="form-group">
							<input id="ContactLastName" name="ContactLastName" type="text" placeholder="Last Name" class="col-md-8 form-control" />
						</div>
						<div class="form-group">
							<input id="ContactEmail" name="ContactEmail" type="text" placeholder="Email" class="col-md-8 form-control" />
						</div>
						                        
                        <div class="form-group">
							<input id="ContactPrice" name="ContactPrice" type="text" placeholder="Price" class="col-md-8 form-control" />
						</div>
                        <?php include("php/country.php");?>                        
                        <div class="form-group">
							<input id="ContactZip" name="ContactZip" type="text" placeholder="Zip Code" class="col-md-8 form-control" />
						</div>
                        
                        
                        
						<div class="form-group">
							<textarea id="ContactMessage" name="ContactMessage" placeholder="Description" class="col-md-8 form-control" rows="10"></textarea>
						</div>
						<div class="form-group">
							<button class="btn-theme pull-left form-control">Send</button>
						</div>
					</form> 
					</div>
				</div>
			</div>

		
		</div>
	</div>
	<!-- /Donate-->
	
	<script src="js/jquery-1.9.1.min.js"></script>
     <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
