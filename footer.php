<!-- ========== FOOTER ========== -->
  <footer class="bg-dark">
    <div class="container space-2">
      <div class="row justify-content-md-between">
	    <!-- star block footer -->
        <?php dynamic_sidebar('footer-widget'); ?>

        <!-- end block-->
      </div>	  
    </div>  
   </footer>
   
   <footer class="bg-dark" style="background-color: #1d242f !important;">
	   <div id="footer-credits" class="container">
				<div class="footer-credits-left">
					© <?php echo date("Y"); ?> Copyright - All Rights Reserved
				</div>
				<div class="footer-credits-right">
					Developed By <a href="http://riptware.com">Riptware Web Technology Limited</a>
				</div>
		</div>	
	</footer>

  <!-- ========== END FOOTER ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Panel Sidebar Navigation -->
  
  <!-- End Signup Modal Window -->
  <!-- ========== END SECONDARY CONTENTS ========== -->

   
<!-- Go to Top -->
<a class="js-go-to u-go-to" href="javascript:;"
data-position='{"bottom": 15, "right": 15 }'
data-type="fixed"
data-offset-top="400"
data-compensation="#header"
data-show-effect="slideInUp"
data-hide-effect="slideOutDown">
<span class="fa fa-arrow-up u-go-to__inner"></span>
</a>
<!-- End Go to Top -->
<!-- JS Global Compulsory -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-migrate.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>


  <!-- JS Implementing Plugins -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/hs.megamenu.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.validate.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/custombox.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/custombox.legacy.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/dzsparallaxer.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.cubeportfolio.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/player.min.js"></script>

  <!-- JS Space -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/hs.core.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/hs.header.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/hs.unfold.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/hs.validation.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/hs.focus-state.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/hs.malihu-scrollbar.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/hs.modal-window.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/hs.show-animation.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/hs.slick-carousel.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/hs.cubeportfolio.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/hs.video-player.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/hs.go-to.js"></script>
  <!-- JS Plugins Init. -->
 
  <script>
       $(window).on('load', function () {
      // initialization of HSMegaMenu component
      $('.js-mega-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 991,
        hideTimeOut: 0
      });
    });


    $(document).on('ready', function () {
      // initialization of header
      $.HSCore.components.HSHeader.init($('#header'));

      // initialization of unfold component
      $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
        afterOpen: function () {
          if (!$('body').hasClass('IE11')) {
            $(this).find('input[type="search"]').focus();
          }
        }
      });

      // initialization of form validation
      $.HSCore.components.HSValidation.init('.js-validate', {
        rules: {
          confirmPassword: {
            equalTo: '#password'
          }
        }
      });

      // initialization of forms
      $.HSCore.helpers.HSFocusState.init();

      // initialization of malihu scrollbar
      $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

      // initialization of autonomous popups
      $.HSCore.components.HSModalWindow.init('[data-modal-target]', '.js-signup-modal', {
        autonomous: true
      });

      // initialization of show animations
      $.HSCore.components.HSShowAnimation.init('.js-animation-link');

      // initialization of slick carousel
      $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

      // initialization of cubeportfolio
      $.HSCore.components.HSCubeportfolio.init('.cbp');

      // initialization of video player
      $.HSCore.components.HSVideoPlayer.init('.js-inline-video-player');

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');
    });
  </script>
  
 <?php wp_footer(); ?> 
</body>
</html>