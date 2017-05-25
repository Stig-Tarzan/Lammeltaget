<?php
	include '../bootstrap.php';
	session_start(); 

	echo $_POST['trail_name_value'];
	if (isset($_POST['trail_name_value'])) 
	{

		$trail_name_value = $_POST['trail_name_value'];
		echo $trail_name_value;
		$sql="UPDATE trail SET downVotes = downVotes + 1 WHERE trailName = '$trail_name_value'";
		$result = mysqli_query($conn, $sql);
		if (!$result) 
		{
			echo "Failed vote";
		}
		else
		{
			echo "Successful vote";
		}
	}