<?php
	session_start();
	
	if (!isset($_SESSION['user_name']))
	{
		echo "false";
	}
	else
	{
		echo "true";
	}

