<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zipbox
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300' rel='stylesheet' type='text/css'>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> -->

<link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" role="banner">

		<div class="site-header">
			<div class="site-branding">

					<div id="tagline" class="header-copy">
						<?php bloginfo('description'); ?>
						<div id="header-search">
						<a href="tel:<?php echo get_theme_mod( 'sdgnew_company_tollfree' ); ?>"><?php echo get_theme_mod( 'sdgnew_company_tollfree' ); ?></a>
						<a href="#"><i class="fa fa-search"></i></a>

							<div id="search-drop">
								<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
									<label>
										<input id="search" type="search" class="search-field" placeholder="Search …" value="" name="s" title="Search for:">
									</label>

								</form>
							</div>

					</div>
				</div>

				<div id="header-logo">
					<div class="header-img-wrapper">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img id="logo" src="<?php bloginfo('template_directory'); ?>/img/sdg-logo-large.png" alt="logo">
						</a>
					</div>
				</div>

				<div id="honeywell-logo" class="header-copy">
					<img width="100" src="<?php bloginfo('template_directory'); ?>/img/header/HW_AuthorizedDlr_Platinum.png" alt="Honeywell Logo">
				</div>

			</div>
		</div>
		<div id="nav-wrapper">
			<div id="nav-bar">
				<div class="menu-toggle">
					<button class="hamburger">&#9776;</button>
				</div>

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'menu_id' => 'primary-menu' ) ); ?>
				</nav>

				<div id="nav-button">
					<a href="/contact/"><i class="fa fa-angle-right" aria-hidden="true"></i> What can we do for you?</a>
				</div>
			</div>
		</div>

	</header>

	<div id="content" class="site-content">
