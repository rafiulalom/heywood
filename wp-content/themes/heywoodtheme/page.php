<?php 
/**
 * page.php
 *
 * The theme's page file.
 */
?>
<?php get_header(); ?>
  
  <div class="hero grad-bg">
    <div class="container">
      <h1><?php wp_title(''); ?></h1>
      <h3><?php the_field('page_sub_title', get_option('page_for_posts')); ?></h3>
      <span class="hero-brand"><img src="<?php echo THEMEROOT; ?>/assets/img/heywood-hoa-management-arizona-brand-glyph.svg"></span>
    </div>
  </div><!--/ .hero -->

  

  <div class="content">
    
    <div class="content-block">
      <div class="container">

          <?php while( have_posts() ) : the_post(); ?>
            
              <div class="page-content">
                <?php the_content(); ?>
              </div>              

          <?php endwhile; ?>

      </div><!--/ .container -->
    </div><!--/ .content-block -->
  
  </div><!--/ .content -->


  
  
<?php get_footer(); ?>
