<?php

		$register_fields = "
		           



								<input name='username_value' id='username_register' placeholder='Välj användarnamn'>
								<input name='email_value' id='email_register' type='email' placeholder='e-mail'>
								<input name='first_name' id='first_name_register' class='personuppg'  placeholder='Namn'>
								<input name='last_name' id='last_name_register' class='personuppg'  placeholder='Efternamn'>
								<input name='dob_value' id='dob_register' type='date' class='personuppg' >
								<input name='address_value' id='address_register' placeholder='Gatunamn'>
								<input name='postcode_value' id='postcode_register' placeholder='Postnummer'>
								<input name='city_value' id='city_register' placeholder='Stad'>
								<input name='password_value' id='password_register' type='password' placeholder='Välj lösenord'>
								<input name='reenter_password_value' id='reenter_password_register' type='password' placeholder='Upprepa lösenord'>
								<input name='have_read' id='user_agree' type='checkbox' ><label id='agree_terms'>Jag har läst och förstår <label id='load_terms'>användarvilkoren</label></label>
								<div id='terms_of_agree'><h2 id='fill_text'>Registrera dig och<br> se vart det leder!</h2></div>

								<button id='apply_register_button' class='button'> Registrera </button>

							";

	echo $register_fields;