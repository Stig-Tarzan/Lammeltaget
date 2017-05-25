<?php
	include '../bootstrap.php';
	session_start();

	$sql = "SELECT * FROM trail,user WHERE trail.userID=user.userID";
	$result = mysqli_query($conn, $sql);
	
//Ovan bör ligga kvar och $result bör "Returnas"

//Vi bör bryta ut nedan till en view
		while ($row = $result->fetch_assoc())  
		{
			$trail_name = $row['trailName'];

			echo "<div id='".$trail_name."' class='trails_in_list'>"; 
			echo "<img src='assets/img/maps_icon.png' class='trail_img'><div class='trail_content_info'>";
			echo "<label id='trail_name_in_list'>" . $trail_name . "</label> <br>	";
			echo "<label class='trail_list_difficulty'>Svårighet:<label>" . $row['difficultyLevel'] . "<br>";
			echo "<label class='trail_list_length'>Längd:<label>" . $row['trailLength'] . "<br>";
			echo "<label class='trail_list_username'>Skapar av: ". $row['userName'] . "<label>";
			echo "</div>";
			
			echo "<label class='trail_list_rating'>" .($row['upVotes']-$row['downVotes']) .  "</label>";
			echo "<label class='trail_list_date'>Skapad: " .$row['creationDate']. "</label>" ;
			
			echo "</div>";
		}


