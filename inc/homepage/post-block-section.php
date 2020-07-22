<div class="container space-2 space-3--lg" style="padding-top: 3em; padding-bottom: 3em;">
<div class="card-deck d-block d-lg-flex">

       <?php 
	   query_posts ('posts_per_page=3');
	   while(have_posts()) : the_post();?>
        <div class="card card-frame mb-5">
          <!-- Listing -->
          <a class="card-body p-4" href="<?php the_permalink();?>">
            <div class="media">
              <img class="max-width-9 mb-2" src="<?php the_post_thumbnail_url();?>">
              <div class="media-body px-4">
                <h4 class="h6 text-dark mb-1"><?php the_title();?></h4>
                <p><?php excerpt(15);?></p>
              </div>
            </div>
          </a>
          <!-- End Listing -->
        </div>
		<?php endwhile;?>
		
      </div>
	  </div>