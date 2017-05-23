<?php
	$undo_trailpart = "
   var undone_poly = poly.getPath().getArray();
		
       for(i=0; i == poly.getPath().getArray().length;i++){
			path.push (undone_poly[i]);
		}


          $('#main_section').on('click', '#undo_icon',function () 
          {
            alert('hej');
            var undone_poly = poly.getPath().getArray();
    
            for(i=0; i == poly.getPath().getArray().length;i++){
              path.push (undone_poly[i]);
            }

          });



	";
	echo $undo_trailpart;