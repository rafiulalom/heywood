<?php 
/**
 * search.php
 *
 * The theme's search result file.
 */
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
  <div class="hero grad-bg">
    <div class="container">
      <h1>
      <?php
        global $wp_query;
        $total_results = $wp_query->found_posts;
        echo $total_results;
      ?>
      <?php 
              printf( __( 'search results for <strong>  %s' . "</strong>" , 'hw' ), get_search_query() );
            ?>
      </h1>
      <span class="hero-brand"><img src="<?php echo THEMEROOT; ?>/assets/img/heywood-hoa-management-arizona-brand-glyph.svg"></span>
    </div>
  </div><!--/ .hero -->
  

  <div class="content">
    <div class="page-nav">
      <span class="page-nav-fade-label"><i class="mdi mdi-swap-horizontal"></i> Swipe to scroll</span>
      <div class="page-nav-fade left"></div>
      <div class="page-nav-fade right"></div>
      <div class="container-fluid">

        <ul>
          <li class="active"><a href="<?php bloginfo('url'); ?>/news">All</a></li>
          <?php wp_list_categories( array(
              'orderby'    => 'name',
              'show_count' => false,
              'title_li' => '',
              'exclude'    => array( 10 )
          ) ); ?>
          <li class="search"><a data-toggle="collapse" href="#searchCollapse"><i class="fa fa-search"></i></a></li>
        </ul>
      </div><!--/ .container -->
    </div><!--/ .page-nav -->
    
    <div class="collapse page-nav-search" id="searchCollapse">
      <div class="container">
        <?php get_search_form(); ?>
      </div><!--/ .container -->
    </div><!--/ .collapse -->
    
    <div class="content-block">
      <div class="container">

        <div class="news-feed">

          <?php while( have_posts() ) : the_post(); ?>
            
              <div class="media">                
                  <div class="media-left">
                    <a href="<?php the_permalink(); ?>">
                      <?php
                        // Must be inside a loop.
                         
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail( 'full', array( 
                              'class' => 'img-fluid'
                            ));
                        }
                        else {
                            echo '<img src="http://placehold.it/1200x880/1a89d0" class="img-fluid">';
                        }
                      ?>
                    </a>
                    
                  </div><!--/ .media-left -->
                  
                  <div class="media-body">
                    <p class="media-date"><?php the_time('F j, Y'); ?></p>
                    <h2 class="media-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p class="media-preview ellipsis"><?php echo excerpt(30); ?></p>
                    
                      <?php
                        $categories = get_the_category();
                        if ( ! empty( $categories ) ) {
                      ?>
                        <ul class="media-tags">
                          <?php    
                            echo '<li><a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a></li>';
                          ?>
                        </ul>
                      <?php } ?>
                    
                  </div><!--/ .media-body -->
                
              </div><!--/ .media -->

          <?php endwhile; ?>


          <?php 
            if ( function_exists( 'wp_pagenavi' ) ) {
              wp_pagenavi(); 
            }
          ?>
          


        </div><!--/ .news-feed -->

      </div><!--/ .container -->
    </div><!--/ .content-block -->
  
  </div><!--/ .content -->
<?php endif; ?>

  
  
<?php get_footer(); ?>
