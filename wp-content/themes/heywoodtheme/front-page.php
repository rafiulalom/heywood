<?php 
/**
 * front-page.php
 *
 * The theme's front page.
 */
?>

<?php get_header(); ?>


  
  <div class="hero tall grad-bg">
    <div class="container">
      <h1>We Help Community Associations<br><span id="homeHeroType">Get Things Done.</span></h1>
      <h3>Serving the Arizona Real Estate market since 1933.</h3>
      
      <div class="hero-action">
        <a href="<?php the_field('view_our_services'); ?>" class="btn btn-whtline">View our services</a> 
        <a href="<?php the_field('request_a_proposal'); ?>" class="btn btn-whtshade">Request a proposal</a>
      </div><!--/ .hero-action -->
      
      <img class="hero-brand" src="<?php echo THEMEROOT; ?>/assets/img/heywood-hoa-management-arizona-brand-glyph.svg">
    </div>
  </div><!--/ .hero -->
  
  
  <div class="content">
    <div class="content-block">
      <div class="container">

        <?php while( have_posts() ) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; ?>        
        
      </div><!--/ .container -->
    </div><!--/ .content-block -->
    


    <?php if( have_rows('about_us_contents') ) : ?>

      <div class="content-block bg-grey">
        <div class="container">
          <div class="row">
            <?php while( have_rows('about_us_contents') ): the_row(); ?>
              <div class="col-md-4">
                <h3 class="section-heading"><?php the_sub_field('title'); ?></h3>
                <?php the_sub_field('content'); ?>
              </div><!--/ .col-md-4 -->
            <?php endwhile; ?>
          </div><!--/ .row -->
        </div><!--/ .container -->
      </div><!--/ .content-block .bg-grey -->

    <?php endif; ?>
    
    
    <?php 
      $our_core_values_title = get_field('our_core_values_title'); 
      $our_mission_statement_title = get_field('our_mission_statement_title'); 
      $our_vision_statement_title = get_field('our_vision_statement_title'); 
    ?>
    <?php if( $our_core_values_title || $our_mission_statement_title || $our_vision_statement_title ) : ?>
      <div class="half-block">
        <div class="content-block bg-blue">
          <div class="container">
            <h3 class="section-heading"><?php the_field('our_core_values_title'); ?></h3>
            <?php the_field('our_core_values_contents'); ?>
          </div><!--/ .container -->
        </div><!--/ .content-block .bg-blue -->

        <div class="content-block">
          <div class="container">
            <h3 class="section-heading"><?php the_field('our_mission_statement_title'); ?></h3>
            <?php the_field('our_mission_statement_contents'); ?>
            <br>
            <br>
            <h3 class="section-heading"><?php the_field('our_vision_statement_title'); ?></h3>
            <?php the_field('our_vision_statement_contents'); ?>
          </div><!--/ .container -->
        </div><!--/ .content-block -->
      </div><!--/ .half-block -->
    <?php endif; ?>

    
    <div class="content-block bg-blk">
      <div class="container">
        <h3 class="section-heading"><?php the_field('how_we_do_it_title'); ?></h3>
        <?php the_field('how_we_do_it_contents'); ?>
        
        <br><br>
        <h3 class="section-heading"><?php the_field('our_core_values_grid_title'); ?></h3>
        

        <?php if( have_rows('our_core_values_grid_contents') ) : ?>
          <div class="core-value-boxes">
            <?php $counter = 1; ?>
            <?php while( have_rows('our_core_values_grid_contents') ): the_row(); ?>
              <div class="box">
                <h2><small>0<?php echo $counter++; ?></small><br><?php the_sub_field('our_core_values_grid_text'); ?></h2>
              </div><!--/ .box -->
            <?php endwhile; ?>
          </div><!--/ .core-value-boxes -->
        <?php endif; ?>


      </div><!--/ .container -->
    </div><!--/ .content-block -->
    
    <div class="content-block slick-block">
      <div class="container">
        <h2 class="block-heading"><?php the_field('client_testimonial_section_title'); ?></h2>
        
        <p class="heading-helper squished text-center"><?php the_field('client_testimonial_section_contents'); ?></p>

        <?php if( have_rows('client_reviews') ) : ?>
          <div class="reviews">
            <?php while( have_rows('client_reviews') ): the_row(); ?>
              <?php $image = get_sub_field('review_image'); ?>
              <div style="display:inline-block;margin:0 1rem;">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" class="img-fluid" />
                <h4><?php the_sub_field('review_title'); ?></h4>
                <?php the_sub_field('review_content'); ?>
              </div>            
            <?php endwhile; ?>
          </div>
        <?php endif; ?>

      </div><!--/ .container -->
    </div><!--/ .content-block -->
  </div><!--/ .content -->
</main>

  


<?php get_footer(); ?>
