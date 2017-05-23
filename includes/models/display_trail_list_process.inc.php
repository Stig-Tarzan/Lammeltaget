<?php
	include '../bootstrap.php';
	session_start();

	$sql = "SELECT * FROM trail";
	$result = mysqli_query($conn, $sql);

		while ($row = $result->fetch_assoc())  //Runs through the entire result
		{
			$trail_name = $row['trailName'];

			echo "<div id='trail'><button class='trails_in_list'>"; 
			echo $trail_name;
			echo "</button></div>";
		}