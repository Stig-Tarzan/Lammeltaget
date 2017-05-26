var mouse_is_inside = false;
var voted_up = false;
var voted_down = false;

$(document).ready(function () {

    $('#profile_section').hover(function(){ 
        mouse_is_inside=true; 
    }, function(){ 
        mouse_is_inside=false; 
    });

    $("body").mouseup(function(){ 
        if(! mouse_is_inside) $('#profile_section').hide();
    });


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
	$('#profile_section').on('click', '#log_out_button',function () {

		$.post("includes/models/log_out_process.inc.php",{}, function(data, status)
		{
			window.location.href = 'index.php';
		});		
	});
	//***************************************************


	$('#search_container').on('click', '#search_button',function () {
		$('#content_bot').css('display', 'none');
		$("#add_trail").css("display", "flex");
		$('#undo_icon').css("display", "none");
		$('#save_icon').css("display", "none");
		
		$('#filter_container').load('includes/views/filters.inc.php');
		$('#content_top').load('includes/models/display_trail_list_process.inc.php');
		$('#content_bot').empty();
		$('#content_bot_2').empty();
		$('#content_bot_2').css("display", "none");
	});

	$('#user_section').on('click', '#register_button',function () {

		$('#user_section').css('width', '30%');
		$('#user_section').css('box-shadow', '0 14px 28px rgba(0,0,0,0.25) 0 10px 10px rgba(0,0,0,0.22)');	
		
		
		$('#user_section').load('includes/views/register.inc.php');

	});



	//*************profile info*****************************

	$('.banner').on('click', '#username_button',function () {
		$('#profile_section').load('includes/views/profile.inc.php');

		$('#profile_section').css('width', '20%');
		$('#profile_section').css('display', 'flex');
		$('#profile_section').css('box-shadow', '0 14px 28px rgba(0,0,0,0.25) 0 10px 10px rgba(0,0,0,0.22)');	
		
		
		

	});


	//*************profile trails*****************************
	$('#profile_section').on('click', '#user_trails',function () {
		$('#content_bot').css('display', 'none');
		$("#add_trail").css("display", "flex");
		$('#undo_icon').css("display", "none");
		$('#save_icon').css("display", "none");
		
		
		
		
		$('#content_top').load('includes/views/my_trails.inc.php');

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
      $('#content_bot').css('display', 'none');
      $("#add_trail").css("display", "flex");
		$('#undo_icon').css("display", "none");
		$('#save_icon').css("display", "none");
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

	//*************Load trail*************************
    $('#content_top').on('click', '.trails_in_list',function () 
    {
    	var trail_name = this.id;
    	var data = {trail_name_value: trail_name};
    	$.post("includes/models/get_trail.inc.php", 
			data
			, function(data, status)
     		{
        		$('#content_top').load('includes/views/load_trail.inc.php', {selected_trail:data, trail_name: trail_name});
        		$('#content_bot').css('display', 'initial');
        		$('#content_bot_2').css('display', 'initial');

        		$('#content_bot').load('includes/views/comment_form.inc.php', {trail_name: trail_name});
        		$('#content_bot_2').load('includes/views/comment_display.inc.php', {trail_name: trail_name});
      		});
    	});
	//***************************************************

	//*************Post comment*************************
	 $('#content_bot').on('click', '#submit_comment',function () 
    {
    	var comment_input = $('#comment_input').val();
    	var comment_trail_name = $('#comment_trail_name').val();
    	var comment_date = $('#comment_date').val();
    	var data = 
    		{comment_input: comment_input, 
    		comment_trail_name: comment_trail_name,
    		comment_date: comment_date 
    		};

    	$.post("includes/models/comment_set.inc.php", 
			data
			, function(data, status)
			{
				alert(data);
			});
    	$('#content_bot_2').load('includes/views/comment_display.inc.php', {trail_name: comment_trail_name});

    });
	//*************Rate trail*************************
	$('#content_top').on('click', '#upvote_trail_button',function () 
    {
    	if(!voted_up){
	    	var trail_name = $('#vote_trail_name').val();
	    	var data = {trail_name_value: trail_name};
	    	$.post("includes/models/up_vote_trail.inc.php", 
				data
				, function(data, status)
				{
					alert(data);
				});
	    	voted_up = true;
	    	voted_down = false;
	    	$('#upvote_trail_button').css("color", "rgba(255, 227, 91,0.5)");
	    	$('#downvote_trail_button').css("color", "#9187a1");
	    }
	    if (voted_up) {
	    	$('#upvote_trail_button').css("color", "rgb(255, 209, 58)");
	    }

    });
	if (voted_up) {
	    	$('#upvote_trail_button').css("color", "rgb(255, 209, 58)");
	    };
	if (voted_down) {
		$('#downvote_trail_button').css("color", "blue");
	};

	$('#content_top').on('click', '#downvote_trail_button',function () 
    {
    	if(!voted_down){
	    	var trail_name = $('#vote_trail_name').val();
	    	var data = {trail_name_value: trail_name};
	    	$.post("includes/models/down_vote_trail.inc.php", 
				data
				, function(data, status)
				{
					alert(data);
				});
	    	voted_down = true;
	    	voted_up = false;
	    	$('#downvote_trail_button').css("color", "blue");
	    	$('#upvote_trail_button').css("color", "#9187a1");
	    }
    });
    
	//***************************************************

	//*************filter trail*********************
$('#filter_container').on('click', '.filter_button',function () {

		var trail_filter = this.id;


		$('#content_top').load('includes/models/filter_process.inc.php',{filter:trail_filter} );
	});

	
	//***************************************************

	$('#main_section').on('click', '#add_trail',function () 
	{	

		

		$('#content_top').load('includes/views/create_trail.inc.php');
		$('#content_bot').load('includes/views/trail_info.inc.php');
		$("#add_trail").css("display", "none");
		$('#undo_icon').css("display", "flex");
		$('#save_icon').css("display", "flex");
		$('#content_bot').css('display', 'initial');

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

