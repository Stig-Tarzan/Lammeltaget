<?php
	include '../bootstrap.php';
	session_start();

	$sql = "SELECT * FROM trail";
	$result = mysqli_query($conn, $sql);

		while ($row = $result->fetch_assoc())  //Runs through the entire result
		{
			$trail_name = $row['trailName'];

			echo "<div id='".$trail_name."' class='trails_in_list'>"; 
			echo "<img src='assets/img/maps_icon.png' class='trail_img'>";
			echo $trail_name;
			echo "</div>";
		}