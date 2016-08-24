<?php 
/**
 * single.php
 *
 * The theme's single file for blog post.
 */
?>
<?php get_header(); ?>


  <?php while( have_posts() ) : the_post(); ?>

  <div class="hero grad-bg news-post" style="background-color:<?php the_field('hero_background_of_post'); ?>;">
    <div class="container">
      <h1><?php the_title(); ?></h1>
      <h3>{ <?php the_time('F j, Y'); ?> }</h3>
      <?php $hero_thumb_image = get_field('hero_thumb_image'); ?>
      <img src="<?php echo $hero_thumb_image['url']; ?>" class="poster" title="" alt="<?php echo $hero_thumb_image['alt']; ?>">
      <span class="hero-brand"><img src="<?php echo THEMEROOT; ?>/assets/img/heywood-hoa-management-arizona-brand-glyph.svg"></span>
    </div>
  </div><!--/ .hero -->

  

  <div class="content">    
    <div class="content-block">
      <div class="container">

        <div class="news-post-media">
          <?php the_content(); ?>  

        
          <div class="share-links">
            <h5>If you found this page helpful or interesting,<br> <span>share it with a friend</span>.</h5>
            <a href="#" class="btn btn-facebook"><i class="fa fa-facebook"></i>Share on Facebook</a>
            <a href="#" class="btn btn-green-line"><i class="fa fa-envelope-o"></i>Email to a Friend</a>
            <a href="#" class="btn btn-linkedin"><i class="fa fa-linkedin"></i>Share on LinkedIn</a>
          </div><!--/ .share-links -->
          
          <p class="company-profile">Heywood Community Management specializes in homeowners' association (HOA) management throughout Arizona and surrounding areas. Heywood HOA Management has actively been a part of Arizona's Real Estate market for over 75 years. With a single focus on community association management, Heywood Community Management is dedicating its resources to raising the community management standard of quality.</p>

          <?php if ( is_active_sidebar( 'subscribe-widget' ) ) : ?>
              <div class="news-subscribe">
                <h3>HOA business tips, intriguiging topics, and freebies straight to your inbox.</h3>
                <h5>Join over 10k subscribers who get our content first.</h5>
                <?php dynamic_sidebar( 'subscribe-widget' ); ?>
                <p>No charge. Unsubscribe at anytime.</p>
              </div><!--/ .news-subscribe -->
          <?php endif; ?>
          
        </div><!--/ .news-post-media -->

  <?php endwhile; ?>
        
        <div class="disqus">
          <div id="disqus_thread"></div>
            <script>

            /**
             *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
             *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables */
            /*
            var disqus_config = function () {
                this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            };
            */
            (function() { // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                s.src = '//heywoodhoa.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
            })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
        </div><!--/ .disqus -->

      </div><!--/ .container -->
    </div><!--/ .content-block -->
  </div><!--/ .content -->


  
  
<?php get_footer(); ?>
