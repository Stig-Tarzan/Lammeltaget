<?php
	include '../bootstrap.php';
	session_start();

	if (isset($_POST['user_id'])) 
	{

		$user_id = $_POST['user_id'];
	
		$sql= "DELETE FROM user WHERE userID = '$user_id'";
		$result = mysqli_query($conn, $sql);

		if (!$result) 
		{
			echo "Failed delete";
		}
	}