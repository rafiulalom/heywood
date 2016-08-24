<?php 
/**
 * 404.php
 *
 * The theme's 404 file.
 */
?>
<?php get_header(); ?>
  
  <div class="hero grad-bg">
    <div class="container">
      <h1><?php wp_title(''); ?></h1>
      <span class="hero-brand"><img src="<?php echo THEMEROOT; ?>/assets/img/heywood-hoa-management-arizona-brand-glyph.svg"></span>
    </div>
  </div><!--/ .hero -->

  

  <div class="content">
    
    <div class="content-block">
      <div class="container">

          <div class="not_found">
            <h2><?php _e( 'Error 404 - Nothing Found', 'pls' ); ?></h2>
            <p class="img"><img src="<?php echo IMAGES; ?>/404.jpg" alt="Nothing Found"></p>
            <p>It looks like nothing was found here. Go back to <a href="<?php bloginfo('home'); ?>">home</a>, or maybe try a search?</p>
              <?php get_search_form(); ?>
          </div>

      </div><!--/ .container -->
    </div><!--/ .content-block -->
  
  </div><!--/ .content -->


  
  
<?php get_footer(); ?>
