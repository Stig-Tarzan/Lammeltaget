<?php
	include '../bootstrap.php';
	session_start();
	$filter = $_POST['filter'];
	$search_input = $_POST['search_input'];
	$search_input_exploded = explode(" ", $search_input);

	if ($filter=='trailName')
	{
		$order = 'ASC';
	}
	else 
	{
		$order = 'DESC';
	}

	if (!empty($search_input)) 
	{
		for ($i=0; $i < count($search_input_exploded); $i++) 
		{ 
			$sql = "SELECT * FROM user,trail join (SELECT trail.trailID, SUM(vote) as 'rating' FROM vote,trail WHERE vote.trailID = trail.trailID group by trail.trailID) rate on trail.trailID = rate.trailID WHERE trail.userID=user.userID AND trailName LIKE '%$search_input_exploded[$i]%' ORDER BY $filter $order";
			$result = mysqli_query($conn, $sql);
		}
	}
	else
	{
		$sql = "SELECT * FROM user,trail join (SELECT trail.trailID, SUM(vote) as 'rating' FROM vote,trail WHERE vote.trailID = trail.trailID group by trail.trailID) rate on trail.trailID = rate.trailID WHERE trail.userID=user.userID ORDER BY $filter $order";
		$result = mysqli_query($conn, $sql);
	}

		while ($row = $result->fetch_assoc())  //Runs through the entire result
		{
			

			

			echo "<div id='".$row['trailName'] ."' class='trails_in_list'>"; 
			echo "<img src='assets/img/maps_icon.png' class='trail_img'><div class='trail_content_info'>";
			echo "<label id='trail_name_in_list'>" . $row['trailName'] . "</label> <br>	";
			echo "<label class='trail_list_difficulty'>Svårighet:<label>" . $row['difficultyLevel'] . "<br>";
			echo "<label class='trail_list_length'>Längd:<label>" . $row['trailLength'] . "<br>";
			echo "<label class='trail_list_username'>Skapar av: ". $row['userName'] . "<label>";
			echo "</div>";
			
			echo "<div id='steg_div'><label class='trail_list_rating'>" .$row['rating'].  "</label></div>";;
			echo "<label class='trail_list_date'>" .$row['creationDate']. "</label>" ;
			
			echo "</div>";
		}