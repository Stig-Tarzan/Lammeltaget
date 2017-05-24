<?php
	include '../bootstrap.php';
	session_start();

	$trail_id = $_POST['trail_id_value'];

	$sql="SELECT * FROM trail WHERE trailID='$trail_id'";

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






