$(document).ready(function () {

	$('#search_container').load('includes/views/search.php');
	$('#user_section').load('includes/views/login.php');

	$('#search_container').on('click', '#search_button',function () {
		
		$('#filter_container').load('includes/views/filters.php');

		$('#content_top').load('includes/views/trails.php');
	});

	$('#user_section').on('click', '#register_button',function () {

		$('#user_section').css('width', '40%');
		
		
		$('#user_section').load('includes/views/register.php');

	});

	

});