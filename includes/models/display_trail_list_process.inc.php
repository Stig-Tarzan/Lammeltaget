<?php
	include '../bootstrap.php';
	session_start();


	$search_input = mysqli_real_escape_string ($conn,$_POST['search_input']);
	$search_input_exploded = explode(" ", $search_input);

	if (!empty($search_input)) 
	{
		for ($i=0; $i < count($search_input_exploded); $i++) 
		{ 
			$sql = "SELECT * FROM trail,user WHERE trail.userID=user.userID AND trailName LIKE '%$search_input_exploded[$i]%' ";
			$result = mysqli_query($conn, $sql);
		}
	}
	else
	{
		$sql = "SELECT * FROM trail,user WHERE trail.userID=user.userID";
		$result = mysqli_query($conn, $sql);
	}
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


			echo "<div id='".$trail_name."' class='trails_in_list' title='".$row['userName']."'>"; 
			echo "<img src='assets/img/maps_icon.png' class='trail_img'><div class='trail_content_info'>";
			echo "<label id='trail_name_in_list'>" . $trail_name . "</label> <br>	";
			echo "<label class='trail_list_difficulty'>Svårighet:<label>" . $row['difficultyLevel'] . "<br>";
			echo "<label class='trail_list_length'>Längd:<label>" . $row['trailLength'] . "<br>";
			echo "<label class='trail_list_username'>Skapad av: ". $row['userName'] . "<label>";
			echo "</div>";
			
			echo "<div id='steg_div'><label class='trail_list_rating'>" .$row_rating['rating'].  "</label></div>";
			echo "<label class='trail_list_date'>" .$row['creationDate']. "</label>" ;
			
			echo "</div>";
		}


