<?php
include '../bootstrap.php';
session_start(); 

if (isset($_POST['username_value']))  
	{
		$user_name = $_POST['username_value'];
		$password =$_POST['password_value'];

		$sql = "SELECT * FROM user WHERE userName='$user_name'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		$db_hash = $row['password'];
		$user_salt = $row['salt'];

		$new_hash = sha1($password.$user_salt);

		if ($new_hash != $db_hash)
		{
				
		}
		else
		{
			$sql = "SELECT * FROM user WHERE userName='$user_name' AND password='$db_hash'"; 
			$result = mysqli_query($conn, $sql);	
			$_SESSION['user_name'] = $row['userName'];
			$_SESSION['user_id'] = $row['userID'];
			$_SESSION['user_id'] = $row['admin'];
			echo "true";
		}
	}