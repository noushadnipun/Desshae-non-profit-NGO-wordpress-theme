<?php

function riptware_sidebar(){	
	register_sidebar(array(
	  'name' => 'Footer Widget',
	  'description' => 'Add your footer Widgets',
	  'id' => 'footer-widget',
	  'before_widget' => '<div class="col-6 col-md-3 col-lg-2 order-lg-4 mb-7 mb-lg-0">',
	  'after_widget' => '</div></div>',
	  'before_title' => '<h3 class="h6 text-white mb-3">',
	  'after_title' => '</h3><div class="list-group list-group-flush list-group-transparent footer-list">',	
	));	
}
add_action('widgets_init' , 'riptware_sidebar');

?>