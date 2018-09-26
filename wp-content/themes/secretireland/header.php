<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Secretireland
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'secretireland' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php the_custom_logo(); ?>
			<div class="site-branding__text">
				<?php
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$secretireland_description = get_bloginfo( 'description', 'display' );
				if ( $secretireland_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $secretireland_description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
			</div>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'secretireland' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'header',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<?php if(is_front_page() ) : ?>
		<section class="hero">
			<div class="hero__inner">
				<div class="hero__header">
					<h1 class="hero__headline">Secret Ireland</h1>
				</div>
				<div class="hero__content">
					<p class="hero_tagline">Discover Ireland's forgotten history, hear reawakened stories and myths from yesteryear and stand on top of mountains that are carved into the Irish consciousness.</p>
				</div>
			</div>
			<figure class="header-image">
				<?php the_header_image_tag(); ?>
			</figure><!-- .header-image -->
		</section>
	<?php endif; ?>

	<div id="content" class="site-content">
