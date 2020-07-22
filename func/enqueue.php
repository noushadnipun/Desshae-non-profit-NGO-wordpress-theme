<?php

function deshaee_by_riptware_scripts() {
	//css
	
	//wp_enqueue_style( 'deshaee-by-riptware-style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css');
	
	wp_enqueue_style( 'font-awesome-min-css', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
	wp_enqueue_style( 'hs-megamenu-css', get_template_directory_uri() . '/assets/css/hs.megamenu.css');
	wp_enqueue_style( 'jquery-mCustomScrollbar-css', get_template_directory_uri() . '/assets/css/jquery.mCustomScrollbar.css');
	wp_enqueue_style( 'custombox-min-css', get_template_directory_uri() . '/assets/css/custombox.min.css');
	wp_enqueue_style( 'animate-min-css', get_template_directory_uri() . '/assets/css/animate.min.css');
	wp_enqueue_style( 'jquery-fancybox-css', get_template_directory_uri() . '/assets/css/jquery.fancybox.css');
    wp_enqueue_style( 'slick-css/', get_template_directory_uri() . '/assets/css/slick.css');
	wp_enqueue_style( 'dzsparallaxer-css', get_template_directory_uri() . '/assets/css/dzsparallaxer.css');
	wp_enqueue_style( 'cubeportfolio-min-css', get_template_directory_uri() . '/assets/css/cubeportfolio.min.css');
	
	wp_enqueue_style( 'theme-css', get_template_directory_uri() . '/assets/css/theme.css');
	
	
	
	//js
	wp_enqueue_script( 'jquery-min-js', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'jquery-migrate-min-js', get_template_directory_uri() . '/assets/js/jquery-migrate.min.js', array(), '1.0.0',  true );	
    wp_enqueue_script( 'popper-min-js', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '1.0.0', true );	
	wp_enqueue_script( 'bootstrap-min-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), '1.0.0', true );
	
    wp_enqueue_script( 'hs-megamenu-js', get_template_directory_uri() . '/assets/js/hs.megamenu.js', array(), '1.0.0', true );
	wp_enqueue_script( 'jquery-validate-min-js', get_template_directory_uri() . '/assets/js/jquery.validate.min.js', array(), '1.0.0', true );
	wp_enqueue_script( 'jquery-mCustomScrollbar-concat-min-js', get_template_directory_uri() . '/assets/js/jquery.mCustomScrollbar.concat.min.js', array(), '1.0.0',  true );
	wp_enqueue_script( 'custombox-min-js', get_template_directory_uri() . '/assets/js/custombox.min.js', array(), '1.0.0',  true );
	wp_enqueue_script( 'custombox-legacy-min-js', get_template_directory_uri() . '/assets/js/custombox.legacy.min.js', array(), '1.0.0',  true );
	wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/js/slick.js', array(), '1.0.0',  true );
	wp_enqueue_script( 'dzsparallaxer-js', get_template_directory_uri() . '/assets/js/dzsparallaxer.js', array(), '1.0.0',  true );
	wp_enqueue_script( 'jquery-cubeportfolio-min-js', get_template_directory_uri() . '/assets/js/jquery.cubeportfolio.min.js', array(),'1.0.0',  true );
	wp_enqueue_script( 'player-min-js', get_template_directory_uri() . '/assets/js/player.min.js', array(), '1.0.0',  true );
	
	wp_enqueue_script( 'jquery-fancybox-min-js', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'hs-core-js', get_template_directory_uri() . '/assets/js/hs.core.js', array(), '1.0.0', true );
	wp_enqueue_script( 'hs-header-js', get_template_directory_uri() . '/assets/js/hs.header.js', array(), '1.0.0',  true );
	wp_enqueue_script( 'hs-unfold-js', get_template_directory_uri() . '/assets/js/hs.unfold.js', array(), '1.0.0',  true );
	wp_enqueue_script( 'hs-validation-js', get_template_directory_uri() . '/assets/js/hs.validation.js', array(), '1.0.0',  true );
	wp_enqueue_script( 'hs-focus-state-js', get_template_directory_uri() . '/assets/js/hs.focus-state.js', array(), '1.0.0',  true );
	wp_enqueue_script( 'hs-malihu-scrollbar-js', get_template_directory_uri() . '/assets/js/hs.malihu-scrollbar.js', array(), '1.0.0',  true );
	wp_enqueue_script( 'hs-modal-window-js', get_template_directory_uri() . '/assets/js/hs.modal-window.js', array(), '1.0.0',  true );
	wp_enqueue_script( 'hs-show-animation-js', get_template_directory_uri() . '/assets/js/hs.show-animation.js', array(), '1.0.0',  true );
	wp_enqueue_script( 'hs-cubeportfolio-js', get_template_directory_uri() . '/assets/js/hs.cubeportfolio.js', array(), '1.0.0',  true );
	wp_enqueue_script( 'hs-fancybox-js', get_template_directory_uri() . '/assets/js/hs.fancybox.js', array(), '1.0.0',  true );
	wp_enqueue_script( 'hs-go-to-js', get_template_directory_uri() . '/assets/js/hs.go-to.js', array(), '1.0.0',  true );
	//wp_enqueue_script( 'dcustom-js', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.0.0',  true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'deshaee_by_riptware_scripts' );

?>