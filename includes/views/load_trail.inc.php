
<!-- Google API key: AIzaSyBHZvUPwL77h619fuPWHSSodVSsgoz51n0



 -->
<?php

  
 	 $googlemaps_api = "
 	 					<div id='map'></div>
    <script>


    // poly kan användas som array som inehåller kordinater för alla polylines. kan sparas för representera trail i DB.
      var poly;

      var map;
      var distance = 0  ;
      var coordinates;

      

      for ($i=0; $i <   ; $i++) { 
        # code...
      }

      var path_line= [
      {lat: 59.637714606663124, lng: 17.085216497071087},
      {lat: 59.642369436139475, lng: 17.09887218894437},
      {lat: 59.64566603794365, lng: 17.10882854880765},
      {lat: 59.6461865244132, lng: 17.122218136209995}
      ];

      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: {lat: 59.853642, lng: 17.634966}
        });

        poly.setMap(map);
      }
}
			
      

    </script>
    <script async defer
    src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBHZvUPwL77h619fuPWHSSodVSsgoz51n0&callback=initMap'>
    </script>



						";
	echo $googlemaps_api;
