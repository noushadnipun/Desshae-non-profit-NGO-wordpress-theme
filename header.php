<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png"/>
       <title>
    <?php if(is_front_page() || is_home()){
        echo get_bloginfo('name');
        echo ' | ';
         echo get_bloginfo('description');
    } else{
        echo wp_title(' ');
    }?>
</title>
  <!-- CSS Global Compulsory -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/hs.megamenu.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/jquery.mCustomScrollbar.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/custombox.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/dzsparallaxer.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/cubeportfolio.min.css">

  <!-- CSS Space Template -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/theme.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- ========== HEADER ========== -->
  <header id="header" class="u-header u-header--modern u-header--floating-lg">
    <div id="logoAndNav" class="container">
      <div class="u-header__section u-header--floating-lg__inner" style="background: linear-gradient(to top,rgba(255,255,255,.9) 100%,#fff 0);border-radius: 22px;">
        <!-- Nav -->
        <nav class="js-mega-menu navbar navbar-expand-lg u-header__navbar">
          <!-- Logo -->
          <div class="u-header__navbar-brand-wrapper">
            <a class="navbar-brand u-header__navbar-brand" href="<?php bloginfo('home'); ?>" aria-label="Deeshae">
              <img style="width: 115px; height: 45px;" class="u-header__navbar-brand-default" src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt="Logo">
              <img class="u-header__navbar-brand-mobile" src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt="Logo" style="width: 115px; height: 45px;">
            </a>
          </div>
          <!-- End Logo -->

          <!-- Responsive Toggle Button -->
          <button type="button" class="navbar-toggler btn u-hamburger u-header__hamburger"
                  aria-label="Toggle navigation"
                  aria-expanded="false"
                  aria-controls="navBar"
                  data-toggle="collapse"
                  data-target="#navBar">
            <span class="d-none d-sm-inline-block"></span>
            <span id="hamburgerTrigger" class="u-hamburger__box ml-3">
              <span class="u-hamburger__inner"></span>
            </span>
          </button>
          <!-- End Responsive Toggle Button -->
		
          <!-- Navigation -->
          <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse py-0">
             <?php
				wp_nav_menu( array(
					'theme_location'    => 'header-main-menu',
					'depth'             => 2,
					'container'         => false,
					//'container_class'   => 'collapse navbar-collapse u-header__navbar-collapse py-0',
					//'container_id'      => 'navBar',
					//'menu_class'        => 'navbar-nav u-header__navbar-nav',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker(),
					'items_wrap'        => '<ul class="navbar-nav u-header__navbar-nav">%3$s</ul>',
				) );
		    ?>		            
          </div>
          <!-- End Navigation -->
          <ul class="navbar-nav flex-row u-header__secondary-nav">
		  
		     <!-- Search -->
              <li class="nav-item u-header__navbar-icon u-header__navbar-v-divider" style="margin-left: auto;">
                <a class="btn btn-xs btn-icon btn-text-dark u-header__search-toggle" href="javascript:;" role="button"
                   aria-haspopup="true"
                   aria-expanded="false"
                   aria-controls="search"
                   data-unfold-target="#search"
                   data-unfold-hide-on-scroll="false"
                   data-unfold-type="css-animation"
                   data-unfold-duration="300"
                   data-unfold-delay="300"
                   data-unfold-animation-in="slideInUp">
                  <span class="fa fa-search btn-icon__inner"></span>
                </a>

                <!-- Input -->
                <form method='GET' id="search" class="js-focus-state input-group form u-header__search u-unfold--css-animation u-unfold--hidden" action="<?php bloginfo('home');?>/">
                  <input name="s" class="form-control form__input" type="search" placeholder="Search">
                  <div class="input-group-addon u-header__search-addon p-0">
                    <button class="btn btn-primary u-header__search-addon-btn" type="submit" id="searchsubmit">
                      <span class="fa fa-search"></span>
                    </button>
                  </div>
                </form>
                <!-- End Input -->
              </li>
              <!-- End Search -->
		  
            

            <!-- Account Signin -->
            
            <!-- End Account Signin -->
          </ul>
        </nav>
        <!-- End Nav -->
      </div>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->
