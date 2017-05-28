<?php
	include '../bootstrap.php';
	session_start();
	


	if (isset($_POST['trail_name_value'])) 
	{
		$user_name = $_SESSION['user_name'];
		$trail_name = $_POST['trail_name_value'];
		$trail_difficulty_level = $_POST['trail_difficulty_level_value'];
		$trail_creation_date = $_POST['trail_creation_date_value'];
		$trail_info = $_POST['trail_info_value'];
		$trail_shape = $_POST['trail_shape_value'];
		$trail_length = $_POST['trail_length_value'];
		echo $_SESSION['user_name'];

		

		$sql = "SELECT userID FROM user WHERE userName = '$user_name'";
		$result = mysqli_query($conn, $sql);


		if ($result) 
		{
			echo "Successful collection of user ID";
		}
		else
		{
			echo "Failed collection of user ID";
		}


		$row = mysqli_fetch_assoc($result);
		$user_ID = $row['userID'];	
		echo "$user_ID";

		$sql = "INSERT INTO trail (userID, trailName, creationDate, trailInfoText, trailShape, difficultyLevel, trailLength) 
			VALUES ('$user_ID', '$trail_name', '$trail_creation_date', '$trail_info', '$trail_shape', '$trail_difficulty_level', '$trail_length')";	
		$result = mysqli_query($conn, $sql);

		if ($result) 
		{
			echo "Successful trail registration";
		}
		else
		{
			echo "Failed trail registration";
		}
	}
