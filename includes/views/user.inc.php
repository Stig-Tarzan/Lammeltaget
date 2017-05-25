<?php
session_start(); 

	if(isset($_SESSION['user_name']))
	{
		echo "
				<div  id='username_button'></div>
				
				
				";	
	}
