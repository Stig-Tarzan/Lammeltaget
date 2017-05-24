<?php
	include '../bootstrap.php';
	session_start();

	if (isset($_POST['trail_name_value'])) 
	{
		$trail_name = $_POST['trail_name_value'];

		$sql="SELECT * FROM trail WHERE trailName='$trail_name'";

		$result = mysqli_query($conn, $sql);
		if (!$result) 
		{
			echo "Trail not found";
		}
		else
		{
			$row = mysqli_fetch_assoc($result);		
			echo $row['trailShape'];
		}
	}





