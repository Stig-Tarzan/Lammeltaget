<?php
	include '../bootstrap.php';
	session_start();

	if (isset($_POST['comment_id'])) 
	{
		$comment_id = $_POST['comment_id'];
		$sql= "DELETE FROM comment WHERE commentID = '$comment_id'";
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