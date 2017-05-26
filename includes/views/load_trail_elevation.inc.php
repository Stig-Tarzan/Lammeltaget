
<!-- Google API key: AIzaSyBHZvUPwL77h619fuPWHSSodVSsgoz51n0



 -->
<?php
  
  $selected_trail = $_POST['selected_trail'];
  $trail_name = $_POST['trail_name'];
  
  $googlemaps_api = "
            <div id='map'></div>
                <div id='elevation_chart'></div>


    <script src='https://www.google.com/jsapi'>

      var map;
      var flightPath;
      var selected_trail = '$selected_trail';
   

      var path_array = selected_trail.split(',');
      var path_array_float = new Array();
      var path_extended = new Array();

      for (var i=0; i < path_array.length; i++)
      {
        path_array_float[i] = parseFloat(path_array[i]);
      }

      var j = 0;
      for (var i=0; i < path_array_float.length-1; i++) 
      { 
          path_extended[j]=
          {lat: path_array_float[i], lng: path_array_float[i+1]};
          j++;
          i++;
      }
      </script>
      <script>
  
        // Load the Visualization API and the columnchart package.
      google.load('visualization', '1', {packages: ['columnchart']});

      function initMap() {
        // The following path marks a path from Mt. Whitney, the highest point in the
        // continental United States to Badwater, Death Valley, the lowest point.
        var path = [
            {lat: 36.579, lng: -118.292},  // Mt. Whitney
            {lat: 36.606, lng: -118.0638},  // Lone Pine
            {lat: 36.433, lng: -117.951},  // Owens Lake
            {lat: 36.588, lng: -116.943},  // Beatty Junction
            {lat: 36.34, lng: -117.468},  // Panama Mint Springs
            {lat: 36.24, lng: -116.832}];  // Badwater, Death Valley

          map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: path[1],
          mapTypeId: 'terrain'
        });

        // Create an ElevationService.
        var elevator = new google.maps.ElevationService;

        // Draw the path, using the Visualization API and the Elevation service.
        displayPathElevation(path, elevator, map);
      }

      function displayPathElevation(path, elevator, map) {
        // Display a polyline of the elevation path.
        new google.maps.Polyline({
          path: path,
          strokeColor: '#0000CC',
          strokeOpacity: 0.4,
          map: map
        });

        // Create a PathElevationRequest object using this array.
        // Ask for 256 samples along that path.
        // Initiate the path request.
        elevator.getElevationAlongPath({
          'path': path,
          'samples': 256
        }, plotElevation);
      }

      // Takes an array of ElevationResult objects, draws the path on the map
      // and plots the elevation profile on a Visualization API ColumnChart.
      function plotElevation(elevations, status) {
        var chartDiv = document.getElementById('elevation_chart');
        if (status !== 'OK') {
          // Show the error code inside the chartDiv.
          chartDiv.innerHTML = 'Cannot show elevation: request failed because ' +
              status;
          return;
        }
        // Create a new chart in the elevation_chart DIV.
        var chart = new google.visualization.ColumnChart(chartDiv);

        // Extract the data from which to populate the chart.
        // Because the samples are equidistant, the 'Sample'
        // column here does double duty as distance along the
        // X axis.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Sample');
        data.addColumn('number', 'Elevation');
        for (var i = 0; i < elevations.length; i++) {
          data.addRow(['', elevations[i].elevation]);
        }

        // Draw the chart using the data within its DIV.
        chart.draw(data, {
          height: 150,
          legend: 'none',
          titleY: 'Elevation (m)'
        });
        path.setMap(map);
      }
      </script>
    <script async defer
    src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBHZvUPwL77h619fuPWHSSodVSsgoz51n0&callback=initMap'>
    </script>
            ";

  echo $googlemaps_api;
  echo "<input type='hidden' id='vote_trail_name' value='$trail_name'></input>";
  echo "<button id='upvote_trail_button'>Up vote</button>";
  echo "<button id='downvote_trail_button'>Down vote</button>";
