<?php

		$register_fields = 
							"<form id='register_form' action='' method='post'>
								<input name='username_value' id='username_register' placeholder='Välj användarnamn'>
								<input name='mail_value' id='mail_register' placeholder='e-mail'>
								<input name='password_value' id='pasword_register' type='password' placeholder='Välj lösenord'>
								<input name='reenter_password_value' id='reenter_password_register' placeholder='Upprepa lösenord'>
								<button id='apply_register_button' class='button'> Registrera användare</button>
							</form>";

	echo $register_fields;