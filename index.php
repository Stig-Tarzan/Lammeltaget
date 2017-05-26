 <?php
session_start(); 
date_default_timezone_set('Europe/Stockholm'); 

 ?>

 <!DOCTYPE html
    <html lang='en'>
        <head>

            <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister|Roboto" rel="stylesheet">
            <link rel='stylesheet' type='text/css' href='assets/css/main.css'>
            <script src='https://code.jquery.com/jquery-3.2.1.min.js' 
            integrity='sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=' 
            crossorigin='anonymous'></script>
            <meta charset='utf-8'>
            <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>
            <script type="text/javascript" src="assets/js/main.js"></script>
               


            <title>Lämmeltåget</title>
            <div class='banner'>
                <a href='index.php'class='banner_obj' id='lammeltaget'><H1>LämmelTåget</H1></a>
                <div id='user_info'></div>
            </div>
        </head>

        <body id='body'>
            <div id='main_section'>
                <div id='search_container'></div>
                <div id='filter_container'></div>

                <i id='add_trail' class="material-icons">add_circle</i>

                <div id='content_top'><p>Välkommen ombord!</p></div>
                <div id='content_bot'></div>
                <div id='content_bot_2'></div>
                <i id='undo_icon'class="material-icons">undo</i>
                <i id='save_icon' class="material-icons">save</i>
                <i id='comment_icon' class="material-icons">comment</i>

                
                
            </div>
            <div id='user_section' >
            </div>
            <div id='profile_section'></div>
        </body>
    </html>
        
