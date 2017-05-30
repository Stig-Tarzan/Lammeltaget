<?php

include '../bootstrap.php';
session_start(); 

	if(isset($_SESSION['user_name']))
	{
		$logged_in = $_SESSION['user_id'];
		$steps = 0;
		


	$sql = "SELECT * FROM trail,user WHERE trail.userID=user.userID";
	$result = mysqli_query($conn, $sql);


	

		while ($row = $result->fetch_assoc())  
		{
			$trail_name = $row['trailName'];

			$sql_trail_id = "SELECT * FROM trail WHERE trailName='$trail_name'";
			$result_trail_id=mysqli_query($conn, $sql_trail_id);
			$row_trail_id=mysqli_fetch_assoc($result_trail_id);
			$trail_id = $row_trail_id['trailID'];

			$sql_rating = "SELECT SUM(vote) as 'rating' FROM vote WHERE trailID = '$trail_id'";
			$result_rating = mysqli_query($conn, $sql_rating);
			$row_rating = mysqli_fetch_assoc($result_rating);


			if( $row['userID'] == $logged_in) {
				$steps = $steps + $row_rating['rating'];
			}

		}
		echo "
				<div id='username_welcome'>" .$_SESSION['user_name'] ."<a id='user_steg'>Steg " .$steps ."</a></div>";
				if($_SESSION['admin'] == 1)
				{
					echo "<a id='admin_page'>Administratörssida</a>";
				}
		echo "
				<a id='user_trails'>Mina Leder</a>
				<a class='banner_obj' id='log_out_button'>Logga ut </a>
				
				
				";	
	}

