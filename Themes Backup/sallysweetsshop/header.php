<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Sally Sweets online store">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>

	<header id="main-header">

		<section id="header-address">
			<p>52a Derby Street, Leek, Staffordshire, ST13 5AJ. (01538) 567123</p>
		</section>

		<section id="header-logo">
			<img src="https://sallysweets-wp.local/wp-content/uploads/2024/03/sally-sweets-logo-25pc.webp" 
				alt="Sally Sweets">
		</section>

		<!-- site-navigation -->
		<nav id="site-navigation">
			<?php wp_nav_menu( array(
				'theme_location' => 'primary',
				'depth' => 0) ); ?>
		</nav>

	</header>

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
	do_action( 'storefront_before_content' );
	?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		do_action( 'storefront_content_top' );
