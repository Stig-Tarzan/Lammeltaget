<?php
session_start();

    if (isset($_SESSION['user_name']))	
    {
    	$comment_form ="
		<textarea id='comment_input'></textarea>
		<input id='comment_trail_name' type='hidden' value='".$_POST['trail_name']."'>
		<input id='comment_date' type= 'hidden' value='".date('Y-m-d H:i:s')."'>
		<button id='comment_publish' class= 'button'>Publicera</button
		";
	}
	else 
	{
		$comment_form = "<h1 id=comment_mustlogin>Du måste logga in för att kommentera</h1>";
	}
	

echo $comment_form;