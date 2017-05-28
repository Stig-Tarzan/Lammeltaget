<?php
	include '../bootstrap.php';
	
	if (isset($_POST['username_value'])) 
	{
		$user_name =  mysqli_real_escape_string ($conn,$_POST['username_value']);
		$email =  mysqli_real_escape_string ($conn,$_POST['email_value']);
		$password = mysqli_real_escape_string ($conn,$_POST['password_value']);
		$user_salt = substr(sha1(mt_rand()),0,22);
		$encrypted_password = sha1($password.$user_salt);
		$firstName =  mysqli_real_escape_string ($conn,$_POST['first_name']);
		$lastName =  mysqli_real_escape_string ($conn,$_POST['last_name']);
		$DateOfBirth =  mysqli_real_escape_string ($conn,$_POST['dob_value']);
		$adress =  mysqli_real_escape_string ($conn,$_POST['address_value']);
		$postalCode =  mysqli_real_escape_string ($conn,$_POST['postalcode_value']);
		$postalCity =  mysqli_real_escape_string ($conn,$_POST['city_value']);

		$sql = "INSERT INTO user (userName, email, password, salt, firstName, 
				lastName,DateOfBirth, adress, postalCode,postalCity) 
			VALUES ('$user_name', '$email', '$encrypted_password', '$user_salt', '$firstName','$lastName',
			'$DateOfBirth', '$adress', '$postalCode', '$postalCity' )";	
		
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
