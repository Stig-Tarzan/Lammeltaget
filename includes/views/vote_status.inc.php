<?php
  session_start(); 
  include '../bootstrap.php';
  $trail_creator = $_POST['trail_creator'];
  $trail_name = $_POST['trail_name_value'];
  $sql = "SELECT * FROM trail WHERE trailName = '$trail_name'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $trail_id = $row['trailID'];



  echo "<i id='upvote_trail_button'class='material-icons-arrows'>arrow_upward</i>";
  echo "<i id='downvote_trail_button' class='material-icons-arrows'>arrow_downward</i></div>";

  $user_id = $_SESSION['user_id'];

  if (isset($_SESSION['user_name'])) 
  {

    $sql = "SELECT * FROM vote WHERE userID ='$user_id' AND trailID = '$trail_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    echo "<style>#upvote_trail_button{color: rgb(166, 166, 166)} </style>";
    echo "<style>#downvote_trail_button{color: rgb(166, 166, 166)} </style>";
      

    if ($row['vote'] == 1) 
    {
      echo "<style>#upvote_trail_button{color: rgb(255, 173, 43)} </style> ";
      echo "<style>#downvote_trail_button{color: rgb(166, 166, 166)} </style>";
    }
    if($row['vote'] == -1)
    {
      echo "<style>#downvote_trail_button{color: rgb(153, 187, 255)} </style> ";
      echo "<style>#upvote_trail_button{color: rgb(166, 166, 166)} </style>";
    }
}

  
   

 
