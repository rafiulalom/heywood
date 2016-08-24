<?php 
/**
 * category.php
 *
 * The theme's category file.
 */
?>
<?php get_header(); ?>
  
  <div class="hero grad-bg">
    <div class="container">
      <h1><?php printf( single_cat_title( '', false ) ); ?></h1>
      <?php
        // Show an optional term description.
        $term_description = term_description();
        if ( ! empty( $term_description ) ) :
          ?>
            <h3><?php echo $term_description; ?></h3>
        <?php
        endif;
      ?>
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
          <li><a href="<?php bloginfo('url'); ?>/news">All</a></li>
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
        
          <div class="pagination">
            <?php wc_paging_nav(); ?>
          </div><!--/ .pagination -->
          


        </div><!--/ .news-feed -->

      </div><!--/ .container -->
    </div><!--/ .content-block -->
  
  </div><!--/ .content -->


  
  
<?php get_footer(); ?>
