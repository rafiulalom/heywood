<?php 
/**
 * header.php
 *
 * The theme's header.
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, shrink-to-fit=no">
      
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta name="keywords" content="">
    <meta name="author" content="Alpha Hotel - GDC">
    <link rel="icon" href="<?php echo THEMEROOT; ?>/assets/icons/favicon.ico">
    
    <meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:description" content="" />
  	
  	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>

  	<link href="<?php echo THEMEROOT; ?>/assets/css/bootstrap.min.css" rel="stylesheet">
  	<link href="<?php echo THEMEROOT; ?>/assets/css/font-awesome.min.css" rel="stylesheet">
  	<link href="<?php echo THEMEROOT; ?>/assets/css/materialdesignicons.min.css" rel="stylesheet">
  	<link href="<?php echo THEMEROOT; ?>/assets/css/drawer.min.css" rel="stylesheet">
  	<link href="<?php echo THEMEROOT; ?>/assets/css/selectize.css" rel="stylesheet">
  	<link href="<?php echo THEMEROOT; ?>/assets/css/selectize.bootstrap3.css" rel="stylesheet">
  	<link href="<?php echo THEMEROOT; ?>/assets/css/slick-theme.css" rel="stylesheet">
  	<link href="<?php echo THEMEROOT; ?>/assets/css/heywood.css" rel="stylesheet">
  	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<header role="banner">
  <button type="button" class="drawer-toggle drawer-hamburger">
    <span class="sr-only">toggle navigation</span>
    <span class="drawer-hamburger-icon"></span>
  </button>
  <nav class="drawer-nav" role="navigation">
    <ul class="drawer-menu">
      <li class="request">
        <a href="<?php bloginfo( 'url' ); ?>/request-our-services/" class="btn btn-whtline">Request Our Services</a>
        <span class="page-title" title="What Happens When Page Title Is Really Long?">What Happens When Page Title Is Really Long?</span>
      </li>
    </ul>
	
	<?php
	    if (function_exists('wp_nav_menu')) {
	      wp_nav_menu(array(
	        'theme_location' => 'main-menu', 
	        'menu_id' => 'drawer-menu-nav',  
	        'container' => '',
	        'container_class' => '',
	        'menu_class' => 'drawer-menu'
	        ));
	    }
	?>

  </nav>
</header>
  
<main role="main">

  <div class="nav">
    <div class="container-fluid">
      <div class="brand">
        <a href="<?php bloginfo('home'); ?>"><img src="<?php echo THEMEROOT; ?>/assets/img/heywood-hoa-management-phoenix-arizona.svg" alt="Heywood Community Management HOA Management Company Phoenix" title="Heywood Community Management HOA Management Company Phoenix"></a>
      </div><!--/ .brand -->

      <ul class="nav-menu">
        <li><a href="<?php bloginfo( 'url' ); ?>/homeowners/" class="btn btn-whtshade">Homeowners</a></li>
        <li><a href="<?php bloginfo( 'url' ); ?>/request-a-proposal/" class="btn btn-whtline">Request a Proposal</a></li>
      </ul><!--/ .nav-menu -->
    </div><!--/ .container-fluid -->
  </div><!--/ .nav -->