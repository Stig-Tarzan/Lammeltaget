<?php

	$comment_form ="
	<textarea id='comment_input'></textarea>
	<input id='comment_trail_name' type='hidden' value='".$_POST['trail_name']."'>
	<input id='comment_date' type= 'hidden' value='".date('Y-m-d H:i:s')."'>
	<button id='comment_publish' class= 'button'>Publicera</button
	";

echo $comment_form;