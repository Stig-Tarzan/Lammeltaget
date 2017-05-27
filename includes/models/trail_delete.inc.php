<?php
	include '../bootstrap.php';
	session_start();

	if (isset($_POST['trail_name'])) 
	{
		$trail_name = $_POST['trail_name'];
		$sql= "DELETE FROM trail WHERE trailName = '$trail_name'";
		$result = mysqli_query($conn, $sql);

		if (!$result) 
		{
			echo "Failed delete";
		}
		else
		{
			echo "Successful delete";
		}
	}