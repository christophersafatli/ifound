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
