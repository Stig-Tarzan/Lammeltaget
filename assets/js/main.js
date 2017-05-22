$(document).ready(function () {

	$('#search_container').load('includes/views/search.inc.php');
	$('#user_section').load('includes/views/login.inc.php');

	$('#user_info').load('includes/views/user.inc.php');

	$.post("includes/models/session_status.inc.php",{}, function(data, status)
	{

		if(data == 'false'){

			$("#user_section").css("display", "flex");
	
		}
	});		

	//*************log out*********************************
	$('#user_info').on('click', '#log_out_button',function () {

		$.post("includes/models/log_out_process.inc.php",{}, function(data, status)
		{
			window.location.href = 'index.php';
		});		
	});
	//***************************************************


	$('#search_container').on('click', '#search_button',function () {
		
		$('#filter_container').load('includes/views/filters.inc.php');

		$('#content_top').load('includes/views/trails.inc.php');
	});

	$('#user_section').on('click', '#register_button',function () {

		$('#user_section').css('width', '30%');
		$('#user_section').css('box-shadow', '0 14px 28px rgba(0,0,0,0.25) 0 10px 10px rgba(0,0,0,0.22)');	
		
		
		$('#user_section').load('includes/views/register.inc.php');

	});

	//*************Register*****************************
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
				alert(status);
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
				
				if (data == 'true') 
				{
					$("#user_section").css("display", "none");
					$('#user_info').load('includes/views/user.inc.php');
				}
				else
				{
					$("#user_section input").css("border", "solid 1px red");
				}

			});		
		}

	//***************************************************


	
	});	

	$('#main_section').on('click', '#add_trail',function () {

		
		
		
		$('#content_top').load('includes/views/create_trail.inc.php');
		$('#content_bot').load('includes/views/trail_info.php');

	});

	

});
function updateTextInput(val) {
          document.getElementById('trail_current_difficulty').value=val; 
        }
function getDistance(lat1, lon1 , lat2, lon2)
{
	var R = 6371e3; // metres
	var φ1 = lat1.toRadians();
	var φ2 = lat2.toRadians();
	var Δφ = (lat2-lat1).toRadians();
	var Δλ = (lon2-lon1).toRadians();

	var a = Math.sin(Δφ/2) * Math.sin(Δφ/2) +
	       Math.cos(φ1) * Math.cos(φ2) *
	       Math.sin(Δλ/2) * Math.sin(Δλ/2);
	var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));

	var d = R * c;
	return d;
}

function updateLenghtInput(val) {

          document.getElementById('trail_length').value=val; 
        }


