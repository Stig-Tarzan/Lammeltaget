$(document).ready(function () {

	$('#search_container').load('includes/views/search.inc.php');
	$('#user_section').load('includes/views/login.inc.php');

	$('#search_container').on('click', '#search_button',function () {
		
		$('#filter_container').load('includes/views/filters.inc.php');

		$('#content_top').load('includes/views/trails.inc.php');
	});

	$('#user_section').on('click', '#register_button',function () {

		$('#user_section').css('width', '30%');
		
		
		$('#user_section').load('includes/views/register.inc.php');

	});

	//*************Register************************
	$('#user_section').on('click', '#apply_register_button',function () {
		var user_name = $('#username_register').val();
		var email =$('#email_register').val();
		var password =$('#password_register').val();
		var data = { username_value: user_name, email_value: email, password_value: password }
		if(user_name == "" || email == ""|| password == "")
		{
			alert("Please fill all fields")
		}
		else
		{
			$.post("includes/models/register_process.inc.php", 
				data
			, function(data, status)
			{
				alert(data);
				$('#user_section').load('includes/views/login.inc.php');
				$('#user_section').css('width', '10%');
			});		
		}
	});	
	//***************************************************

	//*************log in********************************
	$('#user_section').on('click', '#login_button',function () {
		var user_name = $('#username_input').val();
		var password =$('#password_input').val();
		var data = { username_value: user_name, password_value: password }

		if(user_name == ""|| password == "")
		{
			alert("Please fill all fields")
		}
		else
		{
			$.post("includes/models/login_process.inc.php", 
				data
			, function(data, status)
			{
				alert(data);				
			});		
		}
	//***************************************************


	
	});	

	$('#main_section').on('click', '#add_trail',function () {

		
		
		
		$('#content_top').load('includes/views/create_trail.inc.php');

	});

	

});