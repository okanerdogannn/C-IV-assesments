<?php 
	
	
//Sidebar	
//Reference - https://developer.wordpress.org/themes/functionality/sidebars/
if(function_exists('register_sidebar')){ //If there is a widget friendly sidebar
	register_sidebar(array(
                       'before_widget'=>'<li>', //Add a <li> element before a widget
			           'after_widget' =>'</li>', //Add a </li> element after a widget
			           'before_title' => '<h2>', //Add a <h2> element before a widget title
			           'after_title' => '</h2>' //Add a <h2> element after a widget title
			          ));
}



//Nav Menu
//Reference https://developer.wordpress.org/themes/functionality/navigation-menus/
register_nav_menus( array(
	'main_menu' => 'Main Menu',
	'footer_menu' => 'Footer Menu'
) );


?>