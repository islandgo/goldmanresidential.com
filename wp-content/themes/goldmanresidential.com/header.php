<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta id="viewport-tag" name="viewport" content="width=device-width, initial-scale=1"/>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php if ( has_action( 'aios_seotools_gtm_body' ) )  { do_action('aios_seotools_gtm_body'); } ?>
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Mobile Header") ) : ?><?php endif ?>

	<div id="main-wrapper">


    <?php do_action('aios_landing_page_header'); ?>
    <?php do_action('aios_neighborhoods_header'); ?>


	<header class="header">
		<div class="header-container">
			<div class="header-logo">
				<a href="[blogurl]" aria-label="logo">
					<div class="header-img">
						<img
							alt="header"
							class="img-header"
							src="<?php echo get_stylesheet_directory_uri() ?>/images/header-logo.png"
						/>
					</div>
				</a>
			</div>
			<div class="fixed-header-logo">
				<a href="[blogurl]" aria-label="logo">
					<div class="fixed-header-img">
						<img
							alt="fixed-header"
							class="img-fixed-header"
							src="<?php echo get_stylesheet_directory_uri() ?>/images/fixed-header-logo.png"
						/>
					</div>
				</a>
			</div>
			<nav class="navigation">
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_id' => 'nav', 'theme_location' => 'primary-menu' ) ); ?>
				<a href="[blogurl]" aria-label="search" class="site-btn">Search</a>
			</nav>
				<!-- Burger Menu -->
				<div class="burger-menu is-active">
					<span></span>
					<span></span>
					<span></span>
				</div>
			

		</div>
	</header>
	
	

		<!-- Burger Menu Content -->
		<div class="bm-menu bm-view">
			<div class="bm-content-holder">
				<div class="burger-bg">
					<img class="img-responsive lazyload" alt="burger-bg"
						src="<?php echo get_stylesheet_directory_uri()?>/images/burger-bg.png">
				</div>
				<div class="bm-close">
					<span class="ai-font-close-c"></span>
				</div>
				<div class="bm-content" data-simplebar="init">
					<div class="burger-navs">
						<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_id' => 'nav2', 'theme_location' => 'primary-menu' ) ); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="bm-drop bm-view"></div>
	

	<main>
		<h2 class="aios-starter-theme-hide-title">Main Content</h2>

		<!-- ip banner goes here -->
    <?php
    if ( ! is_home() && !is_page_template( 'template-homepage.php' ) && is_custom_field_banner( get_queried_object() ) && is_active_sidebar('aios-inner-pages-banner'))  {
      dynamic_sidebar('aios-inner-pages-banner');
    }
    ?>
		<!-- ip banner goes here -->


		<?php if ( !is_home() && !is_page_template( 'template-fullwidth.php' ) && !is_page_template( 'template-homepage.php' ) ) : ?>

		<div id="inner-page-wrapper">
			<div class="container">

		<?php endif ?>
	