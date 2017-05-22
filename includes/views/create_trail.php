<!-- Google API key: AIzaSyBdgE6eNr-rgeTfeOn-RFf7hjuY4stagvc
<!-- Google API key: AIzaSyBHZvUPwL77h619fuPWHSSodVSsgoz51n0



 -->
<?php
 	 $googlemaps_api = '<iframe id="google_map" src="//www.google.com/maps/embed/v1/place?q=Empire%20State%20Building
						   	&zoom=13
						    &attribution_source=Google+Maps+Embed+API
						    &attribution_web_url=https://developers.google.com/maps/documentation/embed/
						    &key=AIzaSyBdgE6eNr-rgeTfeOn-RFf7hjuY4stagvc" allowfullscreen>
						</iframe>';
 	 $googlemaps_api = "
 	 					<div id='map'></div>
    <script>


    // poly är en array som inehåller kordinater för alla polylines. kan sparas för representera trail i DB.
      var poly;
      var map;

      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: {lat: 59.853642, lng: 17.634966}
        });

        poly = new google.maps.Polyline({
          strokeColor: 'rgba(243, 255, 22,0.7)',
          
          strokeWeight: 5
        });
        poly.setMap(map);

        // Add a listener for the click event
        map.addListener('click', addLatLng);
      }

      // Handles click events on a map, and adds a new point to the Polyline.
      function addLatLng(event) {
        var path = poly.getPath();

        // Because path is an MVCArray, we can simply append a new coordinate
        // and it will automatically appear.
        path.push(event.latLng);

        // Add a new marker at the new plotted point on the polyline.
        var marker = new google.maps.Marker({
          position: event.latLng,
          title: '#' + path.getLength(),
          map: map

        });
		 alert(poly.getPath().getArray().toString());
			
      }

    </script>
    <script async defer
    src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBHZvUPwL77h619fuPWHSSodVSsgoz51n0&callback=initMap'>
    </script>



						";
	echo $googlemaps_api;
