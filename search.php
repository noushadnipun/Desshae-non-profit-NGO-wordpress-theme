<?php get_header();?>
<main id="content" role="main" class="bg-gray-100">
<?php include 'inc/homepage/slider.php'; ?>
    <!-- Hero Section -->
    <div class="container space-2 space-3--lg" style="padding-top: 3em; padding-bottom: 3em;">
       <h2><center>Results for: <?php the_search_query(); ?></center></h2>
    </div>
    <!-- End Hero Section -->

    <!-- News Blog Content -->
    <div class="container space-3-bottom--lg">
	<?php $i = 0; ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php
    if($i == 0) {
	echo '<div class="card-deck d-block d-lg-flex">';
    }
    ?>
      	
        <article class="card border-0 mb-5">
          <div class="card-body row align-items-stretch no-gutters p-0">
            <!-- News Blog Card -->
            <div class="col-7 border border-right-0 rounded-left">
              <div class="p-5">
                <h2 class="h5 mb-3">
                  <a href="<?php the_permalink();?>"><?php the_title(); ?></a>
                </h2>
                <p class="mb-0"><?php excerpt(30);?></p>
              </div>
            </div>
            <div class="col-5 card-img-right border border-left-0 bg-img-hero" data-bg-img-src="<?php the_post_thumbnail_url();?>" style="background-image: url(<?php the_post_thumbnail_url();?>);"></div>
          </div>
          <!-- End News Blog Card -->
        </article>	
		<?php
		$i++;
		if($i == 2) {
			$i = 0;
			echo '</div>';
		}
		?>
		<?php endwhile; ?>

		<?php
		if($i > 0) {
			echo '</div>';
		}
		?>
		<?php  else :  echo '<center><h2> Search Not Found </h2>  </center>'; ?>
        <?php endif; ?>
     

      <div class="mb-9"></div>

      <!-- Pagination -->
	  <nav aria-label="Page navigation">
	    <?php riptware_numeric_posts_nav(); ?>
	  </nav>
      <!-- End Pagination -->
    </div>
    <!-- End News Blog Content -->
  </main>
  
  
<?php get_footer();?>  