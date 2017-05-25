<?php
	include '../bootstrap.php';
	session_start();
	echo "Hej!";


	if (isset($_POST['comment_input'])) 
	{
		$comment_input = $_POST['comment_input'];
		$user_id = $_SESSION['user_id'];
		$trail_name = $_POST['comment_trail_name'];
		$date = $_POST['comment_date'];

		$sql= "SELECT * FROM trail WHERE trailName = '$trail_name'";

		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		$trail_id = $row['trailID'];
		echo $trail_name;
		echo $date;

		$sql= "INSERT INTO comment (trailID, userID, content, date)
		VALUES('$trail_id', '$user_id', '$comment_input', '$date')";

		$result = mysqli_query($conn, $sql);

		if (!$result) 
		{
			echo "Failed insert";
		}
		else
		{
			echo "Successful insert";
		}


	}