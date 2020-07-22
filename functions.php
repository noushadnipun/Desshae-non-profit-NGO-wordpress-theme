<?php

function riptware_default_functions() {
	
	add_theme_support (title-tag);
	add_theme_support ('post-thumbnails');
		
	//excerpt
	function excerpt($limit){
		$post_content = explode(" " , get_the_content());
		$less_content = array_slice ($post_content, 0, $limit);
		echo implode (" ", $less_content);
	}	
}

add_action('after_setup_theme' , 'riptware_default_functions');



//Load Navigatrion Menu
require_once 'func/nav-menu.php';

//Load Widget
require_once 'func/widget.php';

//slider
require_once 'func/slider.php';

//Load Style and Script
//include 'func/enqueue.php';

//Load Pagination
require_once 'func/pagination.php';

require_once 'assets/lib/admin-dashboard/permission.php';




?>