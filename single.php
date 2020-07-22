<?php get_header(); ?>
<?php include 'inc/homepage/slider.php'; ?>
<div class="bg-gray-100">
    <div class="container space-2 space-3--lg" style="padding-top: 3em; padding-bottom: 3em;">
        <div class="xw-lg-80 xbg-white noborder rounded mx-lg-auto xp-5 xp-sm-7">
		<?php while(have_posts()): the_post();?>
      
          <div class="mb-2">
             <h2><center><?php the_title();?></center></h2>
          </div>
         

          <!-- Info Content -->
          <div class="mb-7">

            <?php the_content(); ?>
          </div>
          <!-- End Info Content -->
        </div>
		<?php endwhile; ?>
    </div>
</div>

<?php get_footer(); ?>