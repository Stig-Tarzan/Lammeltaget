<!-- Google API key: AIzaSyBdgE6eNr-rgeTfeOn-RFf7hjuY4stagvc
<!-- Google API key: AIzaSyBHZvUPwL77h619fuPWHSSodVSsgoz51n0



 -->
<?php


 	 $googlemaps_api = "
 	 					<div id='map'></div>
    <script>


    // poly är en array som inehåller kordinater för alla polylines. kan sparas för representera trail i DB.
      var poly;
      var map;
      var distance = 0  ;
      var coordinates;

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
		 
     coordinates = poly.getPath().getArray();
     alert(coordinates.toString());
     if(coordinates.length > 1 ){
        alert('hej');
        for(var i=0; i<coordinates.length; i++){
          
        var coord1 = coordinates[i].toString().split(',');
        var lat1 = coord1[0];
        var lon1 = coord1[1];

        var coord2  = coordinates[i+1].toString().split(',');
        var lat2 = coord2[0];
        var lon2 = coord2[1];

        i=i+1;
        distance = distance + getDistance(lat1,lon1,lat2,lon2);
        alert(getDistance(lat1,lon1,lat2,lon2));
      }
  
     }
     
     updateLenghtInput(distance);
			
      }

    </script>
    <script async defer
    src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBHZvUPwL77h619fuPWHSSodVSsgoz51n0&callback=initMap'>
    </script>



						";
	echo $googlemaps_api;
