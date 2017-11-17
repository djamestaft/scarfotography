<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package lens
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'lens' ); ?></a>
	
	<div id="jumbosearch">
		<span class="fa fa-remove closeicon"></span>
		<div class="form">
			<?php get_search_form(); ?>
		</div>
	</div>	
	
	<div id="top-bar">
		<div class="container top-bar-container">
			<nav id="top-menu">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav>
			
			<div id="top-buttons">
				<?php if ( get_theme_mod('lens_btn_title1') ) : ?>
					<a href="<?php echo esc_url( get_theme_mod('lens_btn_url1') ); ?>"><button><i class="fa fa-<?php echo get_theme_mod('lens_btn_icon1'); ?>"></i><?php echo esc_html( get_theme_mod('lens_btn_title1') ); ?></button></a>
				<?php endif; ?>
				<?php if ( get_theme_mod('lens_btn_title2') ) : ?>
					<a href="<?php echo esc_url( get_theme_mod('lens_btn_url2') ); ?>"><button><i class="fa fa-<?php echo get_theme_mod('lens_btn_icon2'); ?>"></i><?php echo esc_html( get_theme_mod('lens_btn_title2') ); ?></button></a>
				<?php endif; ?>
			</div>
		</div>	<!--container-->
	</div>
	
	<header id="masthead" class="site-header" role="banner" data-stellar-background-ratio="0.5">
		<div class="layer">
			<div class="container">
				<div class="site-branding">
					<?php if ( get_theme_mod('lens_logo') != "" ) : ?>
					<div id="site-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url( get_theme_mod('lens_logo') ); ?>"></a>
					</div>
					<?php endif; ?>
					<div id="text-title-desc">
					<h1 class="site-title title-font"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description title-font"><?php bloginfo( 'description' ); ?></h2>
					</div>
					<div class="social-icons">
						<?php get_template_part('social', 'sociocon'); ?>	
					</div>
					
				</div>	
			
			</div>	
			
			
			
			
		</div>	
	</header><!-- #masthead -->
	

	<?php get_template_part('slider', 'nivo'); ?>
	<?php get_template_part('showcase'); ?>
	<?php get_template_part('aboutme'); ?>
	
	<div class="mega-container" >
			
		<div id="content" class="site-content container">