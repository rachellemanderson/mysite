<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<link href='https://fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Cedarville+Cursive' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<?php wp_head(); ?>
	<script type="text/javascript" src="<?php get_template_directory_uri() . '/assets/build/scripts.js' ?>"></script>
</head>

<body <?php body_class(); ?>>

<div class="breakpoint-context"></div>

<div id="page" class="site">
	<div class="site-inner">

		<header class="site-header">
			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<div class="container">
					<?php if ( has_nav_menu( 'primary' ) ) : ?>
						<nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'rachelle' ); ?>">
							<?php
								wp_nav_menu( array(
									'theme_location' => 'primary',
									'menu_class'     => 'primary-menu',
								 ) );
							?>
						</nav>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		</header>

		<div id="content" class="site-content">
