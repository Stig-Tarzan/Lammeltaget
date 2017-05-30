<?php
	include '../bootstrap.php';
	session_start();

	$sql = "SELECT * FROM user";
	$result = mysqli_query($conn, $sql);

	while ($row = $result->fetch_assoc())  
	{
		echo "<div class='user_list'>";
		echo "<label class='trail_list_username'>Användarnamn: ". $row['userName'] . "<br></label>";
		echo "<label class='trail_list_username'>Email: ". $row['email'] . "</label>";
		echo "<button id='".$row['userID']."' class='delete_user button'>Radera</button>";
		echo "</div>";
	}