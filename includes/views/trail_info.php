<?php
	$trail_input = "
			<input name='trail_name_value' id='trail_name' placeholder='Namge din led'>
			<input name='trail_lenght_value' id='trail_length' placeholder='Ange led längd'>
			<input name='trail_difficulty_value' id='trail_difficulty' type='range' min='1' max='5' value='1'  onchange='updateTextInput(this.value);'>
			<input type='text' id='trail_current_difficulty' value='1'>
			<input type='textarea' name='trail_info_value' id='trail_info' placeholder='Ange information om led' >
			<button id='regiter_trail_button' class='button'> Registrera Led</button> 

	";

	echo $trail_input;