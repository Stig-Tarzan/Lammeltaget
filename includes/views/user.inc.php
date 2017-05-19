<?php
session_start(); 

	if(isset($_SESSION['user_name']))
	{
		echo "
				<button><p>".$_SESSION['user_name']."</button><button id='log_out_button'>Logga ut</p></button>
				
				";	
	}
