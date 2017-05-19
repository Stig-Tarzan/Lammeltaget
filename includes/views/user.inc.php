<?php
session_start(); 

	if(isset($_SESSION['user_name']))
	{
		echo "
				<button><p>".$_SESSION['user_name']."</p></button><button id='log_out_button'><p>Logga ut</p></button>
				
				";	
	}
