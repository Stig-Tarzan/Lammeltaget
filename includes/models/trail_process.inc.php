<?php
	include '../bootstrap.php';

	if (isset($_POST['trail_name'])) 
	{
		$user_name = $_POST['username_value'];
		$trail_name = $_POST['trail_name_value'];
		$creation_date = $_POST['creation_date_value'];
		$trail_info = $_POST['trail_info_value'];
		$trail_shape = $_POST['trail_shape_value'];
		$difficulty_level = $_POST['difficulty_level_value'];

		$sql = "SELECT userID FROM user WHERE userName = '$user_name'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		$user_ID = $row['userID'];	

		$sql = "INSERT INTO trail (userID, trailName, creationDate, trailinfoText, trailShape, difficultyLevel) 
			VALUES ('$user_ID', '$trail_name', '$creation_date', '$trail_info_text', '$trail_shape', '$difficulty_level')";	
		$result = mysqli_query($conn, $sql);


		

	}
