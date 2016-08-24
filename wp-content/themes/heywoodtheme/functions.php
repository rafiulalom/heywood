<?php 
/**
 * functions.php
 *
 * The theme's functions and definitions.
 */

/**
 * ----------------------------------------------------------------------------------------
 * 1.0 - Define constants.
 * ----------------------------------------------------------------------------------------
 */
define( 'THEMEROOT', get_stylesheet_directory_uri() );
define( 'ASSET', THEMEROOT . '/assets' );
define( 'IMAGES', ASSET . '/img' );

add_filter( 'body_class', function( $classes ) {
    return array_merge( $classes, array( 
    	'drawer', 'drawer--right'
    ) );
} );


/**
 * ----------------------------------------------------------------------------------------
 * 2.0 - Set up theme default and register various supported features.
 * ----------------------------------------------------------------------------------------
 */
if ( ! function_exists('wc_comment_scripts')) {
	function wc_comment_scripts(){

	   if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

	}

	add_action( 'wp_enqueue_scripts', 'wc_comment_scripts' );
}


if ( ! function_exists( 'wc_setup' ) ) {
	function wc_setup() {
		
		/**
		 * Add support for automatic feed links.
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Add support for post thumbnails.
		 */
		add_theme_support( 'post-thumbnails' );


		/**
		 * Register nav menus.
		 */
		register_nav_menus(
			array(
				'main-menu' => __( 'Main Menu', 'hw' )
			)
		);

		register_nav_menus(
			array(
				'footer-menu' => __( 'Footer Menu', 'hw' )
			)
		);
	}

	add_action( 'after_setup_theme', 'wc_setup' );
}



/**
 * ----------------------------------------------------------------------------------------
 * 3.0 - Display meta information for a specific post.
 * ----------------------------------------------------------------------------------------
 */
if ( ! function_exists( 'wc_post_meta' ) ) {
	function wc_post_meta() {
		echo '<ul class="list-inline entry-meta">';

		if ( get_post_type() === 'post' ) {
			// If the post is sticky, mark it.
			if ( is_sticky() ) {
				echo '<li class="meta-featured-post"><i class="fa fa-thumb-tack"></i> ' . __( 'Sticky', 'hw' ) . ' </li>';
			}

			// Get the date.
			echo '<li class="meta-date"> ' . get_the_date() . ' </li>';

			// The categories.
			$category_list = get_the_category_list( ', ' );
			if ( $category_list ) {
				echo '<li class="meta-categories"> ' . $category_list . ' </li>';
			}

			// The tags.
			$tag_list = get_the_tag_list( '', ', ' );
			if ( $tag_list ) {
				echo '<li class="meta-tags"> ' . $tag_list . ' </li>';
			}

			// Comments link.
			if ( comments_open() ) :
				echo '<li>';
				echo '<span class="meta-reply">';
				comments_popup_link( __( 'Leave a comment', 'hw' ), __( 'One comment so far', 'hw' ), __( 'View all % comments', 'hw' ) );
				echo '</span>';
				echo '</li>';
			endif;

			// Edit link.
			if ( is_user_logged_in() ) {
				echo '<li>';
				edit_post_link( __( 'Edit', 'hw' ), '<span class="meta-edit">', '</span>' );
				echo '</li>';
			}
		}
		
		echo '</ul>';
	}
}


/**
 * ----------------------------------------------------------------------------------------
 * 4.0 - Display navigation to the next/previous set of posts.
 * ----------------------------------------------------------------------------------------
 */
if ( ! function_exists( 'wc_paging_nav' ) ) {
	function wc_paging_nav() { ?>
		
			<?php 
				if ( get_previous_posts_link() ) : ?>
					<?php previous_posts_link( __( 'Newer Articles &rarr;', 'hw' ) ); ?>
				<?php endif;
			 ?>
			<?php 
				if ( get_next_posts_link() ) : ?>
					<?php next_posts_link( __( '&larr; Older Articles', 'hw' ) ); ?>
				<?php endif;
			 ?>
			 <?php
	}
}

add_filter('next_posts_link_attributes', 'posts_link_attributes_1');
add_filter('previous_posts_link_attributes', 'posts_link_attributes_2');

function posts_link_attributes_1() {
    return 'class="btn btn-primary"';
}
function posts_link_attributes_2() {
    return 'class="btn btn-primary pull-right"';
}

/**
 * ----------------------------------------------------------------------------------------
 * 5.0 - Register the widget areas.
 * ----------------------------------------------------------------------------------------
 */
if ( ! function_exists( 'wc_widget_init' ) ) {
	function wc_widget_init() {
		if ( function_exists( 'register_sidebar' ) ) {

			register_sidebar(
				array(
					'name' => __( 'Blog Widget Area', 'hw' ),
					'id' => 'sidebar-blog',
					'description' => __( 'Appears on Blog Page.', 'hw' ),
					'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h3 class="sidebar-title">',
					'after_title' => '</h3>',
				)
			);

			register_sidebar(
				array(
					'name' => __( 'Single Post Subscribe Widget', 'hw' ),
					'id' => 'subscribe-widget',
					'description' => __( 'Appears on Blog Single Page.', 'hw' ),
					'before_widget' => '<div id="%1$s" class="subscribe-widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h3 class="hidden">',
					'after_title' => '</h3>',
				)
			);

			register_sidebar(
				array(
					'name' => __( 'Page Widget Area', 'hw' ),
					'id' => 'sidebar-page',
					'description' => __( 'Appears on Page.', 'hw' ),
					'before_widget' => '<div id="%1$s" class="sidebar-widget">',
					'after_widget' => '</div>',
					'before_title' => '<h3 class="sidebar-title">',
					'after_title' => '</h3>',
				)
			);

			register_sidebar(
				array(
					'name' => __( 'Footer Widget Area 1', 'hw' ),
					'id' => 'footer_widget_1',
					'description' => __( 'Appears on Footer.', 'hw' ),
					'before_widget' => '<div id="%1$s" class="footer-widget">',
					'after_widget' => '</div>',
					'before_title' => '<h6 class="footer-widget-title">',
					'after_title' => '</h6>',
				)
			);

			register_sidebar(
				array(
					'name' => __( 'Footer Widget Area 2', 'hw' ),
					'id' => 'footer_widget_2',
					'description' => __( 'Appears on Footer.', 'hw' ),
					'before_widget' => '<div id="%1$s" class="footer-widget">',
					'after_widget' => '</div>',
					'before_title' => '<h6 class="footer-widget-title">',
					'after_title' => '</h6>',
				)
			);

		}
	}

	add_action( 'widgets_init', 'wc_widget_init' );
}

/**
 * ----------------------------------------------------------------------------------------
 * 6.0 - Other functionality .
 * ----------------------------------------------------------------------------------------
 */

function new_excerpt_more( $more ) {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

function excerpt($num) {
	$limit = $num+1;
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	array_pop($excerpt);
	$excerpt = implode(" ",$excerpt);
	echo $excerpt;
}

function wc_default_menu() {
	echo '<ul id="nav">';
	if ('page' != get_option('show_on_front')) {
		echo '<li><a href="'. home_url() . '/">Home</a></li>';
	}
	wp_list_pages('title_li=');
	echo '</ul>';
}

if ( function_exists( 'add_theme_support' ) ) { 
	add_image_size( 'blog-featured', 315, 275, true );
}


function my_walker_nav_menu_start_el($item_output, $item, $depth, $args) {
    $menu_locations = get_nav_menu_locations();


    if ( has_term($menu_locations['main-menu'], 'nav_menu', $item) ) {
       $item_output = preg_replace('/<a /', '<a class="drawer-menu-item" ', $item_output, 1);
    }

    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'my_walker_nav_menu_start_el', 10, 4);



// ACF Option Page

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> true
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Slider Settings',
		'menu_title'	=> 'Slider',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}



// Turn off auto P
remove_filter( 'the_content', 'wpautop' );
// remove_filter( 'the_excerpt', 'wpautop' );