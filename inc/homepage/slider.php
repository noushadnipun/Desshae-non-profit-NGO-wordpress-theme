<!-- Hero Section -->
    <div class="position-relative">
      <!-- Hero Carousel - Main -->
      <div id="heroMain" class="js-slick-carousel u-slick"
           data-infinite="true"
           data-autoplay="true"
           data-adaptive-height="true"
           data-speed="5000"
           data-fade="true"
           data-nav-for="#heroNav">
		
		<?php 
		$slideritems = new WP_Query(array(
		   'post_type' => 'riptwareslider',
		   'posts_per_page' => '10',
		));
	    while ($slideritems->have_posts()) : $slideritems->the_post(); ?>   
		   
        <!-- Slide #1 -->
        <div class="js-slide">
          <div class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll" data-options='{direction: "normal"}'>
            <!-- Apply your Parallax background image here -->
            <div class="divimage dzsparallaxer--target gradient-overlay-half-whit-v1 bg-img-hero" style="height: 120%; background-image: url(<?php the_post_thumbnail_url();?>);"></div>

            <!-- Content -->
            <div class="d-lg-flex align-items-lg-center">
              <div class="container position-relative z-index-2 space-2-top space-3-bottom space-5--md">
                <div class="w-50 w-md-40">
                  <div class="mb-5">
                    <!--<h1 class="display-4"><?php the_title();?></h1>-->
                    <p class="lead"><?php the_content();?></p>
                  </div>
                </div>
				<!--
                <div class="w-50">
                  <a class="btn btn-primary btn-wide mb-2 mb-md-0 mr-md-2" href="">Get Started</a>
                  <a class="btn btn-purple btn-wide mb-2 mb-md-0" href="">Learn More</a>
                </div>
			   -->	
              </div>
            </div>
            <!-- End Content -->
          </div>
        </div>
        <!-- End Slide #1 -->

       <?php endwhile; ?>
      </div>
      <!-- Hero Carousel - Main -->

      <!-- Hero Carousel - Nav -->
      <div class="container position-absolute-bottom-0">
        <div id="heroNav" class="js-slick-carousel u-slick u-slick--cursor-pointer u-slick--pagination-modern u-slick--transform-off-lg mb-3"
             data-infinite="true"
             data-autoplay="true"
             data-speed="5000"
             data-center-mode="true"
             data-slides-show="3"
             data-is-thumbs="true"
             data-focus-on-select="true"
             data-nav-for="#heroMain"
             data-responsive='[{
               "breakpoint": 992,
               "settings": {
                 "slidesToShow": 2
               }
             }, {
               "breakpoint": 768,
               "settings": {
                 "slidesToShow": 2
               }
             }, {
               "breakpoint": 554,
               "settings": {
                 "slidesToShow": 1
               }
             }]'>
		
         <?php while ($slideritems->have_posts()) : $slideritems->the_post(); ?>  		
          <!-- Slide #1 -->
		  <div class="js-slide u-slick--pagination-modern__item" style="max-width: max-content;">
            <div class="media align-items-center bg-white border rounded">
              
			  <!-- <div class="media-body px-3">
                <span class="u-slick--pagination-modern__item-text"><?php the_title();?></span>
              </div>
			  -->
              <img class="u-slick--pagination-modern__item-img rounded-right" src="<?php the_post_thumbnail_url();?>" alt="Image Description">
            </div>
          </div>
          <!-- End Slide #1 -->
		 <?php endwhile; ?> 
        </div>
      </div>
      <!-- Hero Carousel - Nav -->
    </div>
    <!-- End Hero Section -->