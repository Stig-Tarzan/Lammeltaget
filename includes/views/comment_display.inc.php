<?php
	include '../bootstrap.php';
	session_start();

	$trail_name = $_POST['trail_name'];
	$sql = "SELECT * FROM trail WHERE trailName = '$trail_name'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$trail_id = $row['trailID'];

	$sql = "SELECT * FROM comment WHERE trailID ='$trail_id'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	
//Ovan bör ligga kvar och $result bör "Returnas"

//Vi bör bryta ut nedan till en view

	while ($row = $result->fetch_assoc())  
	{
		$commenter = $row['userID'];
		$comment_date = $row['date'];
		$comment_content = $row['content'];
		echo "<div class='comment_field'>";
		echo "<div class='commenter'>".$commenter."</div>"; 
		echo "<div class='comment_date'>".$comment_date."</div>"; 
		echo "<div class='comment_content'>".$comment_content."</div>"; 
		echo "</div>";
	}