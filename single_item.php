<?php
	include ("./ssi/navbar.php"); // navbar	
	$id = $_GET['id'];
	$result = mysqli_query($con,"SELECT * FROM items WHERE it_id='$id'");
?>


<div id="page4" class="page center">
	<div class="container">
		<div class="row">
			<div class="col-md-12 center">
				<h1><span>Lost Item</span></h1>
				<?php 
					while ($row = mysqli_fetch_array($result, MYSQL_NUM)) {
						$link = '<a href="single_item.php?id='.$row[0].'">'.$row[2].'<br/></a>';
    					printf("Name: %s Description: %s",$link,$row[3]);
					}
				?>
			</div>
		</div>

		<hr />
	<form method="POST" action="./php/smtp/ifound_mail.php">
		<div class="row">
			<div class="col-md-pull-5">
				<!-- DROP DOWN  -->
					
					<div class="dropdown">
						<a type="button" class="btn btn-default" data-toggle="dropdown" href="#">Which Depository ?&nbsp;&nbsp;<b class="caret"></b></a>
						
						<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
							<li>
								<a href="javascript:void(0);" data-locid="1" class="infoMarker">AUB Hamra</a>
							</li>
							<li>
								<a href="javascript:void(0);" data-locid="2" class="infoMarker">NDU Zouk</a>
							</li>
							<li>
								<a href="javascript:void(0);" data-locid="3" class="infoMarker">LAU Byblos</a>
							</li>
						</ul>
					</div>
			</div>
		</div>
		<!-- Depositories -->
		<div class="row" style="margin-top: 15px;">
			<div class="col-md-12 left">
				<div id="map_canvas"></div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-pull-5">
				<input type="hidden" name="itemid" value="<?php echo $id;?>"/>
				<input type="hidden" name="locid" id="location" value=""/>	
				<input type="submit" class="btn btn-default ifoundbtn" value="iFound!">
			</div>
		</div>	
	</form>
		<!-- /Depositories -->
	</div>
</div>



	<script src="js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script type="text/javascript" charset="utf-8">
	jQuery(function() {
		InitializeGoogleMaps();
	});

	// GOOGLE MAPS
	function InitializeGoogleMaps() {
		var locations = [['AUB', '<br />AUB<br />Hamra ', 33.896249, 35.483044, 0], ['NDU', 'NDU<br />Zook', 33.952144, 35.618346, 0], ['LAU', '<br />LAU<br />Byblos ', 34.123002, 35.651928, 0]];

		var j = 0, avgLat, avgLong;
		var sumLat = 0;
		var sumLong = 0;
		var locationsCount = locations.length;
		for ( j = 0; j < locations.length; j++) {
			sumLat += locations[j][2];
			sumLong += locations[j][3];
		}

		avgLat = sumLat / locationsCount;
		avgLong = sumLong / locationsCount;

		var mapOptions = {
			zoom : 14,
			center : new google.maps.LatLng(avgLat, avgLong),
			mapTypeId : google.maps.MapTypeId.ROADMAP
		};

		var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
		var i;
		var gmarkers = [];
		var image = 'gmarker.png';
		var lastinfowindow;

		var rowclass = '';

		var bounds = new google.maps.LatLngBounds();

		for ( i = 0; i < locations.length; i++) {
			image = 'http://www.5index.com/img/gmarker.png';

			addMarker(locations);
			//gmarkers.push(marker);

			bounds.extend(position);

		}

		function addMarker(locations) {
			var marker = new google.maps.Marker({
				position : new google.maps.LatLng(locations[i][2], locations[i][3]),
				animation : google.maps.Animation.DROP,
				map : map,
				icon : image
			});

			position = new google.maps.LatLng(locations[i][2], locations[i][3]);

			var nameArray = locations[i][0].split('/');
			var name = '';
			if (nameArray.length > 1) {
				name = nameArray[1];
			}

			var contentHtml = '<div class="infoWindow"><span class="name">' + name + '</span><span class="address">' + locations[i][1];

			var infowindow = new google.maps.InfoWindow({
				content : contentHtml
			});

			google.maps.event.addListener(marker, 'click', function() {
				if ( lastinfowindow instanceof google.maps.InfoWindow)
					lastinfowindow.close();
				marker.infowindow.open(map, marker);
				lastinfowindow = marker.infowindow;
			});

			marker.locid = i + 1;
			marker.infowindow = infowindow;
			gmarkers[gmarkers.length] = marker;
		}


		bounds.extend(new google.maps.LatLng(avgLat, avgLong));

		// resize the map
		map.fitBounds(bounds);

		$(document).on("click", ".infoMarker", function() {

			//gmarkers[0].infowindow.open(map, gmarkers[0]);
			var thisloc = $(this).data("locid");
			for (var j = 0; j < gmarkers.length; j++) {
				if (gmarkers[j].locid == thisloc) {
					if ( lastinfowindow instanceof google.maps.InfoWindow)
						lastinfowindow.close();
					map.panTo(gmarkers[j].getPosition());
					gmarkers[j].infowindow.open(map, gmarkers[j]);
					lastinfowindow = gmarkers[j].infowindow;
				}
			}
		});
	}

	// END GOOGLE MAPS
	</script>

<script src="bootstrap/js/bootstrap.min.js"></script>
<script>
	$('.infoMarker').on('click', function () {
		$("#location").val($(this).data('locid'));
	})
</script>
</body>
</html>
