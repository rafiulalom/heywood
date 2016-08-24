<?php 
/**
 * footer.php
 *
 * The theme's footer.
 */
?>
</main>

<footer>

  <?php 
    $cta_title = get_field('cta_title', 'option');
    if( $cta_title ) : ?>
    <div class="footer-sales animated-bg">
      <div class="container">
        <h2><?php the_field('cta_title', 'option'); ?></h2>
        <h5><?php the_field('cta_sub_title', 'option'); ?></h5>
        <p><a href="<?php the_field('cta_url', 'option'); ?> " class="btn btn-whtline">Request More Info</a></p>
      </div><!--/ .container -->    
    </div><!--/ .footer-sales -->
  <?php endif; ?>
  
  <div class="footer-main">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <img class="footer-brand" src="<?php echo THEMEROOT; ?>/assets/img/heywood-hoa-management-arizona-brand-glyph.svg">
          <h5 class="footer-tagline">We're raising the community management standard of quality.</h5>
          <p><a href="<?php bloginfo( 'url' ); ?>/request-our-services/" class="btn btn-whtline">Request Our Services</a></p>

          <?php if( have_rows('footer_social_share', 'option') ): ?>
            <ul class="social-list">
              <?php while( have_rows('footer_social_share', 'option') ): the_row(); ?>
                  <li><a href="<?php the_sub_field('url'); ?>"><i class="fa <?php the_sub_field('icon'); ?>"></i></a></li>
              <?php endwhile; ?>
            </ul>
          <?php endif; ?>
          
        </div><!--/ .col-md-3 -->

        <div class="col-lg-3 col-md-6">
          <?php if ( is_active_sidebar( 'footer_widget_1' ) ) : ?>
              <?php dynamic_sidebar( 'footer_widget_1' ); ?>
          <?php endif; ?>
        </div><!--/ .col-md-3 -->

        <div class="col-lg-3 col-md-6">
          <?php if ( is_active_sidebar( 'footer_widget_2' ) ) : ?>
              <?php dynamic_sidebar( 'footer_widget_2' ); ?>
          <?php endif; ?>
        </div><!--/ .col-md-3 -->

        <div class="col-lg-3 col-md-6">
          <h6>News</h6>

            <ul class="news">
              <?php $footer_news = new WP_Query( array(
                  posts_per_page => 3
              ) ); ?>
              <?php while( $footer_news->have_posts() ) : $footer_news->the_post(); ?>
                <li><span class="news-date"><?php the_time('M j, Y'); ?></span><br><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
              <?php endwhile; ?>
            </ul>
        </div><!--/ .col-md-3 -->
      </div><!--/ .row -->
    </div><!--/ .container -->
  </div><!--/ .footer-main -->
  
  <div class="footer-legal">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p><?php the_field('footer_copyright', 'option'); ?></p>
        </div><!--/ .col-md-6 -->
        
        <div class="col-md-6">
          <?php
            wp_nav_menu(array(
                'theme_location' => 'footer-menu', 
                'menu_id' => 'footer_nav',  
                'container' => '',
                'container_class' => '',
            ));
          ?>
        </div><!--/ .col-md-6 -->
      </div><!--/ .row -->
    </div><!--/ .container --> 
  </div><!--/ .footer-legal -->
</footer>

  

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="<?php echo THEMEROOT; ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo THEMEROOT; ?>/assets/js/drawer.min.js"></script>
<script src="<?php echo THEMEROOT; ?>/assets/js/fastclick.js"></script>
<script src="<?php echo THEMEROOT; ?>/assets/js/iscroll.js"></script>
<script src="<?php echo THEMEROOT; ?>/assets/js/selectize.js"></script>
<script src="<?php echo THEMEROOT; ?>/assets/js/slick.min.js"></script>
<script src="<?php echo THEMEROOT; ?>/assets/js/typeit.min.js"></script>
<script src="<?php echo THEMEROOT; ?>/assets/js/jquery.dotdotdot.min.js"></script>
<script src="<?php echo THEMEROOT; ?>/assets/js/heywood.js"></script>
    

    <?php wp_footer(); ?>

</body>
</html>