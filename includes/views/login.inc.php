<?php
session_start();

	if(!isset($_SESSION['user_name']))
	{
		$login_fields = "<input name='username_value' id='username_input' placeholder='Username'>
						 <input name='pasword_value' id='password_input' type='password' placeholder='Password'>
						 <button name='login_button' id='login_button' class='button'>Logga in</button>
						 <button class='button' id='register_button'>Registrera</button>
						 <a id=hide_btn>Göm</a>";
		echo $login_fields;
	}