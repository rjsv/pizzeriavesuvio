<footer>
   <div class="container">
      <?php if ( is_active_sidebar( 'footer-one' ) || is_active_sidebar( 'footer-two' ) || is_active_sidebar( 'footer-three' ) || is_active_sidebar( 'footer-four' ) ): ?>
      <div class="footer-widgets">
         <div class="row">
            <div class="col-md-3">
               <div class="foo-block">
                  <?php dynamic_sidebar('footer-one'); ?>
               </div>
               <!--foo-block-->
            </div>
            <!--col-md-3-->
            <div class="col-md-3">
               <div class="foo-block">
                  <?php dynamic_sidebar('footer-two'); ?>
               </div>
               <!--foo-block-->
            </div>
            <!--col-md-3-->
            <div class="col-md-3">
               <div class="foo-block">
                  <?php dynamic_sidebar('footer-three'); ?>
               </div>
               <!--foo-block-->
            </div>
            <!--col-md-3-->
            <div class="col-md-3">
               <div class="foo-block foo-last">
                  <?php dynamic_sidebar('footer-four'); ?>
               </div>
               <!--foo-block-->
            </div>
            <!--col-md-3-->
         </div>
         <!--row-->
      </div>
      <?php endif; ?>
      <div class="copyright">
         <?php $mt_footer_copy = get_theme_mod( 'mt_footer_copy', '&copy; Caverta. Designed by MatchThemes.'); ?>  
         <div class="footer-copy">
			<span class="footer-year"><?php echo date_i18n(_x( 'Y', 'copyright date format', 'caverta' )); ?></span>
            <?php echo wp_kses_post( $mt_footer_copy ); ?>
         </div>
         <?php
            $mt_social_facebook_url = get_theme_mod( 'mt_social_facebook_url');
            $mt_social_twitter_url = get_theme_mod( 'mt_social_twitter_url');
            $mt_social_instagram_url = get_theme_mod( 'mt_social_instagram_url');
            $mt_social_linkedin_url = get_theme_mod( 'mt_social_linkedin_url');
            $mt_social_pinterest_url = get_theme_mod( 'mt_social_pinterest_url');  
            $mt_social_trip_url = get_theme_mod( 'mt_social_trip_url');  
            $mt_social_youtube_url = get_theme_mod( 'mt_social_youtube_url'); 
            $mt_social_vimeo_url = get_theme_mod( 'mt_social_vimeo_url');
            $mt_social_dribbble_url = get_theme_mod( 'mt_social_dribbble_url');  
            $mt_social_skype_url = get_theme_mod( 'mt_social_skype_url');   
            ?>
         <ul class="footer-social">
            <?php if (!empty($mt_social_facebook_url) ): ?>
            <li><a class="social-facebook" href="<?php echo esc_url($mt_social_facebook_url);?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <?php endif; ?>
            <?php if (!empty($mt_social_twitter_url) ): ?>
            <li><a class="social-twitter" href="<?php echo esc_url($mt_social_twitter_url);?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <?php endif; ?>
			<?php if (!empty($mt_social_instagram_url) ): ?>
            <li><a class="social-instagram" href="<?php echo esc_url($mt_social_instagram_url);?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <?php endif; ?>
            <?php if (!empty($mt_social_pinterest_url) ): ?>
            <li><a class="social-pinterest" href="<?php echo esc_url($mt_social_pinterest_url);?>" target="_blank"><i class="fab fa-pinterest"></i></a></li>
            <?php endif; ?>
            <?php if (!empty($mt_social_trip_url) ): ?>
            <li><a class="social-tripadvisor" href="<?php echo esc_url($mt_social_trip_url);?>" target="_blank"><i class="fab fa-tripadvisor"></i></a></li>
            <?php endif; ?>
			<?php if (!empty($mt_social_linkedin_url) ): ?>
            <li><a class="social-linkedin" href="<?php echo esc_url($mt_social_linkedin_url);?>" target="_blank"><i class="fab fa-linkedin"></i></a></li>
            <?php endif; ?>
            <?php if (!empty($mt_social_youtube_url) ): ?>
            <li><a class="social-youtube" href="<?php echo esc_url($mt_social_youtube_url);?>" target="_blank"><i class="fab fa-youtube"></i></a></li>
            <?php endif; ?>
            <?php if (!empty($mt_social_vimeo_url) ): ?>
            <li><a class="social-vimeo" href="<?php echo esc_url($mt_social_vimeo_url);?>" target="_blank"><i class="fab fa-vimeo-square"></i></a></li>
            <?php endif; ?>
            <?php if (!empty($mt_social_dribbble_url) ): ?>
            <li><a class="social-dribbble" href="<?php echo esc_url($mt_social_dribbble_url);?>" target="_blank"><i class="fab fa-dribbble"></i></a></li>
            <?php endif; ?>
            <?php if (!empty($mt_social_skype_url) ): ?>
            <li><a class="social-skype" href="<?php echo esc_url($mt_social_skype_url);?>" target="_blank"><i class="fab fa-skype"></i></a></li>
            <?php endif; ?>
         </ul>
      </div>
      <!--copyright-->
   </div>
   <!--container-->
</footer>
<?php
   $mt_scroll_top = get_theme_mod( 'mt_scroll_top', 'off');
   
   if($mt_scroll_top == 'on'):
   
   ?>
<div class="scrollup">
   <a class="scrolltop" href="#">
   <i class="fas fa-chevron-up"></i>
   </a>
</div>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>