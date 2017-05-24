<!--api key texteditor 6hi1dybxyo7ndy05dqzdztbn0l40e8vaufi8vpu5q52e7nz8

 -->
<?php
	$trail_input = "

                

			<input name='trail_name_value' id='trail_name' placeholder='Namge din led'>
			
			<label>Svårighet</label>
			<input name='trail_difficulty_value' id='trail_difficulty' type='range' min='1' max='5' value='1'  onchange='updateTextInput(this.value);'>
			<input type='text' id='trail_current_difficulty' value='Nybörjare'>

			<input name='trail_lenght_value' id='trail_length' placeholder='ledlängd'>
			
			<input type='hidden' name='trail_creation_date_value' id='trail_creation_date' value='".date('Y-m-d H:i:s')."'> 
			<textarea name='trail_info_value' id='trail_info' placeholder='Ange information om led' ></textarea>
			<input type='hidden' name='trail_creation_date_value' value='value='".date('Y-m-d H:i:s')."'>
			
				


	";

	echo $trail_input;