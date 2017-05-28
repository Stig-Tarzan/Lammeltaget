<?php
  session_start(); 
  include '../bootstrap.php';


    $trail_creator = $_POST['trail_creator'];
    $trail_name = $_POST['trail_name_value'];
    $sql = "SELECT * FROM trail WHERE trailName = '$trail_name'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $trail_id = $row['trailID'];


    $sql_vote = "SELECT * FROM user,trail join (SELECT trail.trailID, SUM(vote) as 'rating' FROM vote,trail WHERE vote.trailID = trail.trailID group by trail.trailID) rate on trail.trailID = rate.trailID WHERE trail.userID=user.userID AND trail.trailName = '$trail_name'";
    $result_vote = mysqli_query($conn, $sql_vote);
    $row_vote = mysqli_fetch_assoc($result_vote);
    $rating = $row_vote['rating'];


    echo "<div id=vote_container>";

    if (isset($_SESSION['user_name']))
    {
      echo "<i id='upvote_trail_button'class='material-icons-arrows'>arrow_upward</i>";
      echo "<label id='trail_rating'><p>$rating</p></label>";
      echo "<i id='downvote_trail_button' class='material-icons-arrows'>arrow_downward</i></div>";
    }
    else
    {
          echo "<label id='trail_rating'><p>$rating</p></label>";
    }

    

    if (isset($_SESSION['user_name'])) 
    {
      $user_id = $_SESSION['user_id'];
      
      if($trail_creator == $_SESSION['user_name'] OR $_SESSION['admin'] == 1)
      {
        echo "<button id='".$trail_name."' class='delete_trail button'>Radera</button>";
      }

      $sql = "SELECT * FROM vote WHERE userID ='$user_id' AND trailID = '$trail_id'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);

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

  
   

 
