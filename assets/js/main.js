$(document).ready(function () {

	$('#search_container').load('includes/views/search.php');
	$('#user_section').load('includes/views/login.php');

	$('#search_container').on('click', '#search_button',function () {
		
		$('#filter_container').load('includes/views/filters.php');

		$('#content_top').load('includes/views/trails.php');
	});

	$('#user_section').on('click', '#register_button',function () {

		$('#user_section').css('width', '30%');
		$('#user_section').css('box-shadow', '0 14px 28px rgba(0,0,0,0.25) 0 10px 10px rgba(0,0,0,0.22)');	
		
		
		$('#user_section').load('includes/views/register.php');

	});
	$('#main_section').on('click', '#add_trail',function () {

		
		
		
		$('#content_top').load('includes/views/create_trail.php');

	});

	

});