<title>Your items</title>
<?php
include ("./ssi/navbar.php");
// navbar

include("connect.php");
	$user_id = $_SESSION['id'];
	
	
	if(isset($_GET['itemDelete'])){ // Query to delete an item
		$itemToDelete = $_GET['itemDelete'];
		
		mysqli_query($con,"DELETE FROM items WHERE it_id='$itemToDelete'");
	}
	
	
	if(!empty($_POST['item_name']) && isset($_POST['item_name']) &&  !empty($_POST['item_description']) &&  isset($_POST['item_description'])){
		$name = mysqli_real_escape_string($con, $_POST['item_name']);
		$description = mysqli_real_escape_string($con, $_POST['item_description']);	
		mysqli_query($con,"INSERT INTO items (it_us_id,it_name,it_description)
					VALUES ('$user_id','$name', '$description')");	
	}
	$result = mysqli_query($con,"SELECT * FROM items WHERE it_us_id='$user_id'");

/*	while ($row = mysqli_fetch_array($result, MYSQL_NUM)) {
    	printf("ID: %s Name: %s Description: %s",$row[0], $row[2],$row[3]);
	}*/
	
											
?>


<!-- Items-->
<script src="js/jquery-1.9.1.min.js"></script>
<script src="./js/jquery.qrcode-0.7.0/jquery.qrcode-0.7.0.min.js"></script>
<div id="page3" class="page center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Items</h1>
				<hr>

				<!-- Button trigger modal -->
				<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
					Add item
				</button>
				<br />
				<h2 style="text-align: left;">My Items</h2>
				<table class="items-table table table-hover">
			      <thead>
			        <tr>
			          <th>#</th>
			          <th>Name</th>
			          <th>Description</th>
			          <th>QR-Code</th>
			          
			        </tr>
			      </thead>
			      <tbody>
			        <?php
			        $count = 1;
					while ($row = mysqli_fetch_array($result, MYSQL_NUM)) {
						
						$link = '<a href="single_item.php?id='.$row[0].'">'.$row[2].'</a>';
						$qrDiv = "<div class='qrcode' id='qr-".$count."'></div>";
						$xButton = '<a href="#"><span class="glyphicon glyphicon-remove" style="margin:12px 9px;"></span></a>';
						$actions = '<a class="glyphicon glyphicon-remove-circle delete_item" href="./item.php?itemDelete='.$row[0].'">&nbsp;</a>';
						// $actions = '<a class="btn btn-default login_1" href="./item.php?itemDelete='.$row[0].'">Delete</a>';
    					printf("<tr><td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td><td>%s</td></tr>",$count, $link,$row[3], $qrDiv,$actions);
						?>
						<script type="text/javascript">
							$("#qr-<?php echo $count;?>").qrcode({
							width: 10,
							height: 10,
							fill: '#6f7c47',
							text: 'localhost:8888/MAMP/www/ifound/single_item.php?id=<?php echo $row[0];?>'
							});
						</script>
						<?php
						$count++;
						
					}
			        ?>
			      </tbody>
			    </table>
				<!-- Modal -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
									&times;
								</button>
								<h4 class="modal-title" id="myModalLabel">Item</h4>
							</div>
							<!-- body -->
							<div class="modal-body">
								<form id="contactForm" method="POST" class="form" action="item.php">
									<div class row>
										<div class="form-group rows='1'">
											<input id="ContactFirstName" name="item_name" type="text" placeholder="Item Name" class="col-md-8 form-control" />
										</div>
									</div>
									<div class row>
										<div class="form-group">
											<textarea id="ContactMessage" name="item_description" placeholder="Description" class="col-md-8 form-control" rows="2"></textarea>
										</div>
									</div>
									<!-- <div class row>
										<div class="input-group">
											<span class="input-group-addon">$</span>
												<input type="text" class="form-control">
											<span class="input-group-addon">.00</span>
										</div>
									</div> -->
									
									<div class row>
										<div class="form-group" >
											<button class="btn-theme pull-left form-control" style="margin-top:10px;">
												Add item
											</button>
										</div>
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">
									Close
								</button>
								<!-- END body -->
							</div>
						</div>
					</div>
				</div>
				<!-- Modal -->
			</div>
		</div>

	</div>
</div>
<!-- /Items-->
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
