<?php
	$undo_trailpart = "
	<div id='map'></div>
	<script>
		var map;
		
		var undone_poly = new Array(poly.getPath().getArray().length);
		
		var poly_array = poly.getPath();

		for(i=0; i == poly.getPath().getArray().length;i++){
			undone_poly[i]=poly_array[i];
		}


		alert(poly_array);


		function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: {lat: 59.853642, lng: 17.634966}
        });

        undone_poly = new google.maps.Polyline({
          strokeColor: 'rgba(243, 255, 22,0.7)',
          
          strokeWeight: 5
        });
       undone_poly.setMap(map);
   }


      // Handles click events on a map, and adds a new point to the Polyline.
      function addLatLng() {
        var path = undone_poly.getPath();

        // Because path is an MVCArray, we can simply append a new coordinate
        // and it will automatically appear.
        path.push(latLng);



        }
		 
	</script>
	<script async defer
	    src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBHZvUPwL77h619fuPWHSSodVSsgoz51n0&callback=initMap'>
    </script>
	";
	echo $undo_trailpart;