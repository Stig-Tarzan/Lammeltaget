<?php
session_start(); 

	if(isset($_SESSION['user_name']))
	{
		$loged_in = $_SESSION['userID'];
		$steps = 0;
		

		$sql = "SELECT upVotes,downVotes FROM trail WHERE trail.userID=$loged_in";
		$result = mysqli_query($conn, $sql);

		while ($row = $result->fetch_assoc())  //Runs through the entire result
		{
			$steps = $steps + ($row['upVotes']-$row['downVotes']);

		}

		echo "
				<a id='username_welcome'>" .$_SESSION['user_name'] ."</a>
				<a class='banner_obj' id='log_out_button'>Logga ut </a>
				<div id='user_steg'>" .$steps ."</div>
				
				";	
	}

