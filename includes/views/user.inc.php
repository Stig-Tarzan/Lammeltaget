<?php
session_start(); 

	if(isset($_SESSION['user_name']))
	{
		echo "
				<div  id='username_button'></div>
				<a class='banner_obj' id='log_out_button'>Logga ut ".$_SESSION['user_name']."</a>
				
				";	
	}
