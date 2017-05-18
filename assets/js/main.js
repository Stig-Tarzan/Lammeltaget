$(document).ready(function () {

	$('#search_container').load('includes/views/search.php');
	$('#user_section').load('includes/views/login.php');

	$('#search_container').on('click', '#search_button',function () {
		
		$('#filter_container').load('includes/views/filters.php');

		$('#content_top').load('includes/views/trails.php');
	});
});