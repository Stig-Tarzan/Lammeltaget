<?php
	include '../bootstrap.php';
	session_start();
	


	if (isset($_POST['trail_name_value'])) 
	{
		$user_name = mysqli_real_escape_string ($conn,$_SESSION['user_name']);
		$trail_name = mysqli_real_escape_string ($conn,$_POST['trail_name_value']);
		$trail_difficulty_level = mysqli_real_escape_string ($conn,$_POST['trail_difficulty_level_value']);
		$trail_creation_date = mysqli_real_escape_string ($conn,$_POST['trail_creation_date_value']);
		$trail_info = mysqli_real_escape_string ($conn,$_POST['trail_info_value']);
		$trail_shape = mysqli_real_escape_string ($conn,$_POST['trail_shape_value']);
		$trail_length = mysqli_real_escape_string ($conn,$_POST['trail_length_value']);

		$sql = "SELECT userID FROM user WHERE userName = '$user_name'";
		$result = mysqli_query($conn, $sql);

		$row = mysqli_fetch_assoc($result);
		$user_ID = $row['userID'];	

		$sql = "INSERT INTO trail (userID, trailName, creationDate, trailInfoText, trailShape, difficultyLevel, trailLength) 
			VALUES ('$user_ID', '$trail_name', '$trail_creation_date', '$trail_info', '$trail_shape', '$trail_difficulty_level', '$trail_length')";	
		$result = mysqli_query($conn, $sql);

		if ($result) 
		{
			echo "Led registrerad";
		}
		else
		{
			echo "Led inte registrerad";
		}
	}
