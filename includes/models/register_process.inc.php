<?php
	include '../bootstrap.php';
	
	if (isset($_POST['username_value'])) 
	{
		$user_name = $_POST['username_value'];
		$email = $_POST['email_value'];
		$password =$_POST['password_value'];
		$user_salt = substr(sha1(mt_rand()),0,22);
		$encrypted_password = sha1($password.$user_salt);

		$sql = "INSERT INTO user (userName, email, password, salt) 
			VALUES ('$user_name', '$email', '$encrypted_password', '$user_salt')";	
		
		$result = mysqli_query($conn, $sql);
		if (!$result) 
		{
			echo "Failed registration";
		}
		else
		{
			echo "Successful registration";
		}
	}
