<?php
include '../bootstrap.php';
session_start(); 

	if (isset($_POST['trail_name_value'])) 
	{
		$trail_name_value = $_POST['trail_name_value']);
		$sql="UPDATE trail SET upVotes = upVotes + 1 WHERE trailName = '$trail_name_value'";

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