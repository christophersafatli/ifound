<title>iFound</title>
<?php
	include ("./ssi/navbar.php"); // navbar
?>

	<!-- Home -->
	<div class="page bgcolor center">
		<div class="container">
			<div class="row">
				<div class="col-md-11">
					<div class="caption">
                    <img src="img/logo.png" style="width: 150px; margin-right: 10px;"/> <!-- logo -->
                        <div style="float: right;"> 
							<?php
								include("php/user/logd_in.php")
							?>		
						</div>	
					</div>
				</div>
				<div class="col-md-4" style="margin: 8em 2em 0 1em">
					<p style="color: #7a8f3b">iFound this item, and will place it using,</p>
					<img src="img/google_maps.png" style="width: 150px;margin:-5px 20px"/> <!-- logo -->
				</div>
			</div>
		</div>
	</div>
	
			 <!-- <div class="row aboutus" style="">
				<div class="col-md-3">
					<pre class="pre-scrollable">
Text in a pre element is displayed in a fixed-width font, and it preserves both spaces and line breaks
					</pre>
				</div>
				
			</div>
		</div>
	</div>  -->
	<!-- END Home-->

	<script src="js/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
     
</body>
</html>