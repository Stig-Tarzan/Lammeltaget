<?php

include '../bootstrap.php';
session_start(); 

	if(isset($_SESSION['user_name']))
	{
		$loged_in = $_SESSION['user_id'];
		$steps = 0;
		

		$sql = "SELECT upVotes,downVotes FROM trail WHERE trail.userID=$loged_in";
		$result = mysqli_query($conn, $sql);

		while ($row = $result->fetch_assoc())  //Runs through the entire result
		{
			$steps = $steps + ($row['upVotes']-$row['downVotes']);

		}

		echo "
				<div id='username_welcome'>" .$_SESSION['user_name'] ."<a id='user_steg'>Steg " .$steps ."</a></div>
				<a id='user_trails'>Mina Leder</a>
				<a class='banner_obj' id='log_out_button'>Logga ut </a>
				
				
				";	
	}

