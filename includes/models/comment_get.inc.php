<?php
	include '../bootstrap.php';
	session_start();

	$sql = "SELECT * FROM comment";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);

	if (!$result) 
	{
		echo "Failed get";
	}
	else
	{
		echo $result;
	}