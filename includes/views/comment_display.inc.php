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
		$user_id = $row['userID'];

		$sql_user_name = "SELECT * FROM user WHERE userID='$user_id'";
		$result_user_name = mysqli_query($conn, $sql_user_name);
		$row_user_name = mysqli_fetch_assoc($result_user_name);

		$commenter = $row_user_name['userName'];
		$comment_date = $row['date'];
		$comment_content = $row['content'];
		echo "<div class='comment_field'>";
		echo "<div class='commenter'>".$commenter."</div>"; 
		echo "<div class='comment_date'>".$comment_date."</div>"; 
		echo "<div class='comment_content'>".$comment_content."</div>"; 
		if ($row['userID'] == $_SESSION['user_id'] || $_SESSION['admin'] = 1)
		{
			echo "<button id='".$row['commentID']."' class='delete_comment'>Delete</button>";
		}
		echo "</div>";
	}