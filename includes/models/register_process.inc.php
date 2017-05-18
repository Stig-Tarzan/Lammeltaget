<?php
	include '../bootstrap.php';

	$user_name = $_POST['username_value'];
	$email = $_POST['email_value'];				
	$password = $_POST['password_value'];

	$sql = "INSERT INTO user (userName, email, password) 
				VALUES ('$user_name', '$email', '$password')";					
	
	$result = mysqli_query($conn, $sql);
	if ($result) 
	{
		echo "Successful insert";
	}
	else
	{
		echo "Failed insert";
	}
