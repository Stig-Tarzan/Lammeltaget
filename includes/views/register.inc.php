<?php

		$register_fields = "
		           



								<input name='username_value' id='username_register' placeholder='Välj användarnamn'>
								<input name='email_value' id='email_register' type='
								email' placeholder='e-mail'>
								<input name='first_name' id='first_name_register'  placeholder='Namn'>
								<input name='last_name' id='last_name_register'  placeholder='Efternamn'>
								<input name='dob_value' id='dob_register' type='date'  >
								<input name='address_value' id='address_register' placeholder='Gatunamn'>
								<input name='postcode_value' id='postcode_register' placeholder='Postnummer'>
								<input name='city_value' id='city_register' placeholder='Stad'>
								<input name='password_value' id='password_register' type='password' placeholder='Välj lösenord'>
								<input name='reenter_password_value' id='reenter_password_register' type='password' placeholder='Upprepa lösenord'>
								<button id='apply_register_button' class='button'> Registrera användare</button>
							";

	echo $register_fields;