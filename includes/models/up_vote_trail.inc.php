<?php
	include '../bootstrap.php';
	session_start(); 

	
	if (isset($_POST['trail_name_value'])) 
	{

		$trail_name_value = $_POST['trail_name_value'];

		$sql = "SELECT * FROM trail WHERE trailName='$trail_name_value'";
		$result = mysqli_query($conn, $sql);
		$row= mysqli_fetch_assoc($result);

		$user_id = $_SESSION['user_id'];
		$trail_id = $row['trailID'];

		$sql_exists = "
		SELECT vote FROM vote WHERE userID = '$user_id' AND trailID = '$trail_id'";
		$result = mysqli_query($conn, $sql_exists);	
		if(!mysqli_num_rows($result) > 0)
		{
			echo $trail_name_value;
			$sql="INSERT INTO vote (userID, trailID, vote)
				VALUES ('$user_id', '$trail_id', '1')";
			$result = mysqli_query($conn, $sql);
		}
		else
		{
			echo $trail_name_value;	
			$sql = "UPDATE vote SET vote = 1 WHERE userID = '$user_id' AND trailID = '$trail_id'";
			$result = mysqli_query($conn, $sql);
		}	
	}