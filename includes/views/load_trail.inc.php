
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
  $row = mysqli_fetch_assoc($result);
  $trail_id = $row['trailID'];

  
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
          geodesic: true,
          strokeColor: '#FF0000',
          strokeOpacity: 1.0,
          strokeWeight: 2
        });

      path.setMap(map);
}
$('#comment_icon').css('display', 'flex');
$('#add_trail').css('bottom', '15%');
      
    </script>
    <script async defer
    src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBHZvUPwL77h619fuPWHSSodVSsgoz51n0&callback=initMap'>
    </script>
            ";

  echo $googlemaps_api;
  echo "<input type='hidden' id='vote_trail_name' value='$trail_name'></input>";
  echo "<input type='hidden' id='vote_trail_creator_name' value='$trail_creator'></input>";
  echo "<div id=vote_container>";
  echo "<i id='upvote_trail_button'class='material-icons-arrows'>arrow_upward</i>";
  echo "<i id='downvote_trail_button' class='material-icons-arrows'>arrow_downward</i></div>";

  $user_id = $_SESSION['user_id'];

  if (isset($_SESSION['user_name'])) 
  {
    if($trail_creator == $_SESSION['user_name'] OR $_SESSION['admin'] == 1)
    {
      echo "<button id='".$trail_name."' class='delete_trail button'>Radera</button>";
    }

    $sql = "SELECT * FROM vote WHERE userID ='$user_id' AND trailID = '$trail_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row['vote'];
    if ($row['vote'] == 1) 
    {
      echo "<style>#upvote_trail_button{color: rgb(255, 173, 43)} ";
      echo "<style>#downvote_trail_button{color: rgb(166, 166, 166)} ";
    }
    else if($row['vote'] == -1)
    {
      echo "<style>#downvote_trail_button{color: rgb(153, 187, 255)} ";
      echo "<style>#upvote_trail_button{color: rgb(166, 166, 166)} ";
    }
}

  
   

 
