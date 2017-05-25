<?php
session_start(); 


	if(isset($_SESSION['user_name']))
	{
		echo "
				<a id='username_welcome'>" .$_SESSION['user_name'] ."</a>
				<a class='banner_obj' id='log_out_button'>Logga ut </a>
				<div id='user_steg'>" .$_SESSION['user_name'] ."</a>
				
				";	
	}

