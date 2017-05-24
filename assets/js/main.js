$(document).ready(function () {

var poly_total;

	$('#search_container').load('includes/views/search.inc.php');
	$('#user_section').load('includes/views/login.inc.php');

	$('#user_info').load('includes/views/user.inc.php');

	$.post("includes/models/session_status.inc.php",{}, function(data, status)
	{

		if(data == 'false'){

			$("#add_trail").css("display", "none");
			$("#user_section").css("display", "flex");
	
		}
		else
		{
			$("#add_trail").css("display", "flex");
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
		$('#content_top').load('includes/models/display_trail_list_process.inc.php');
		$('#content_bot').empty();
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
					$("#add_trail").css("display", "flex");
				}
				else
				{
					$("#user_section input").css("border", "solid 1px red");
				}

			});		
		}
	});	

	//***************************************************


	//*************Register trail*********************
    $('#main_section').on('click', '#save_icon',function () 

    {
      var trail_name_value = $('#trail_name').val();
      var trail_difficulty_level_value = $('#trail_difficulty').val();
      var trail_creation_date_value = $('#trail_creation_date').val();
      var trail_info_value = $('#trail_info').val();
      var trail_shape_value_raw = poly.getPath().getArray().toString();
      var trail_shape_value = trail_shape_value_raw.replace(/[() ]/g, '');
      var trail_length_value = $('#trail_length').val();
   
      var data = 
      { 
        trail_name_value: trail_name_value, 
        trail_difficulty_level_value: trail_difficulty_level_value, 
        trail_creation_date_value: trail_creation_date_value,
        trail_info_value: trail_info_value,
        trail_shape_value: trail_shape_value,
        trail_length_value: trail_length_value  
      }


      $.post('includes/models/trail_process.inc.php', 
        data
        ,function(data, status)
      {
        alert(data);
      });
    });
	//***************************************************

	//*************Load trail*********************
	
//***************************************************

	

	$('#main_section').on('click', '#add_trail',function () 
	{

		$('#content_top').load('includes/views/create_trail.inc.php');
		$('#content_bot').load('includes/views/trail_info.inc.php');
		$("#add_trail").css("display", "none");
		$('#undo_icon').css("display", "flex");
		$('#save_icon').css("display", "flex");

	});
	$('#main_section').on('click', '#undo_icon',function () 
	{
		
		$('#content_top').load('includes/views/create_trail.inc.php');


	});

	

});
function updateTextInput(val) {
		var difficulty = ""
		switch(val){
			case '1': difficulty="Nybörjare";
					break;
			case '2': difficulty="Enkel";
					break;
			case '3': difficulty="Medel";
					break;
			case '4': difficulty="Erfaren";
					break;
			case '5': difficulty="Svår";
					break;
		}
        document.getElementById('trail_current_difficulty').value=difficulty; 
        }
function getDistance(lat1, lon1 , lat2, lon2)
{
	var R = 6371e3; // metres
	var φ1 = toRadians(lat1);
	var φ2 = toRadians(lat2);
	var Δφ = toRadians((lat2-lat1));
	var Δλ = toRadians((lon2-lon1));

	var a = Math.sin(Δφ/2) * Math.sin(Δφ/2) +
	       Math.cos(φ1) * Math.cos(φ2) *
	       Math.sin(Δλ/2) * Math.sin(Δλ/2);
	var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));

	var d = R * c;
	return d;
}

function toRadians(val)
{
	return val * Math.PI / 180;
}

function updateLenghtInput(val) {

	document.getElementById('trail_length').value=val; 
}

