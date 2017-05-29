
<!-- Google API key: AIzaSyBHZvUPwL77h619fuPWHSSodVSsgoz51n0



 -->
<?php
  session_start(); 
  include '../bootstrap.php';
  $trail_creator = $_POST['trail_creator'];
  $selected_trail = $_POST['selected_trail'];
  $trail_name = $_POST['trail_name'];
  $sql = "SELECT * FROM trail WHERE trailName = '$trail_name'";
  $result = mysqli_query($conn, $sql);

/*  $sql_vote = "SELECT * FROM user,trail join (SELECT trail.trailID, SUM(vote) as 'rating' FROM vote,trail WHERE vote.trailID = trail.trailID group by trail.trailID) rate on trail.trailID = rate.trailID WHERE trail.userID=user.userID AND trail.trailName = '$trail_name'";
  $result_vote = mysqli_query($conn, $sql_vote);
  $row_vote = mysqli_fetch_assoc($result_vote);
  $rating = $row_vote['rating'];*/


  $row = mysqli_fetch_assoc($result);
  $trail_id = $row['trailID'];
  $trail_description = $row['trailInfoText'];
  $trail_length = $row['trailLength'];

  
  $googlemaps_api = "
            <div id='map'></div>
    <script>

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


 
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: path_extended[0],
          mapTypeId: 'terrain'
        });

        path = new google.maps.Polyline({
          path: path_extended,
          geodesic: false,
          strokeColor: '#FF0000',
          strokeOpacity: 1.0,
          strokeWeight: 2
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
  echo "<input type='hidden' id='vote_trail_creator_name' value='$trail_creator'></input>"; 

  echo "<div id ='trail_information'";
  echo "<label id='trail_name_in_display' value='$trail_name'><h1>$trail_name</h1></label>";
  echo "<label id='trail_creator_name_in_display' value='$trail_creator'>Skapad av: $trail_creator</label>"; 
  echo "<text id='trail_description' value='$trail_name'>Beskrivning: $trail_description</text>";
  echo "<text id='trail_description' value='$trail_name'>Längd: $trail_length meter</text>";
  echo "</div>";
  
   

 
