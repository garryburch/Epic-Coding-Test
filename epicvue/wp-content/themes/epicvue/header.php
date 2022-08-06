<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EpicPress
 */
$main_logo = get_field('main_logo', 'option');
$site_phone = get_field('site_phone', 'option');
$site_phone_two = get_field('site_phone_two', 'option');
$contact_us_link = get_field('contact_us_link', 'option');

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'epicpress'); ?></a>

		<header id="masthead" class="site-header" style="display: block;">

			<nav id="main-nav" class="navbar-light " aria-labelledby="main-nav-label">
				<h2 id="main-nav-label" class="sr-only"><?php esc_html_e('Main Navigation'); ?></h2>
				<div class="container w-100 pt-20">
					<div class="navbar-top d-flex justify-content-center justify-content-lg-end mb-10 pr-20">
						Sales: <a class="main-phone" href="tel:<?php echo $site_phone ?>"><?php echo $site_phone ?> </a> <span class="px-10 px-lg-20">|</span>
						Driver Support: <a class="main-phone" href="tel:<?php echo $site_phone_two ?>"><?php echo $site_phone_two ?></a>
					</div>
					<div class="navbar-bottom w-100 d-flex justify-content-between align-content-center">
						<div class="navbar-left d-flex align-items-center">
							<a class="navbar-brand text-center" rel="home" href="<?php echo esc_url(home_url('/')); ?>" itemprop="url">
								<img class="main-logo" src="<?php echo $main_logo['url'] ?>" alt="<?php echo $main_logo['alt'] ?: 'logo' ?>">
							</a>
						</div>
						<div class="hamburger d-flex d-lg-none align-items-center">
							<i class="fa fa-bars" aria-hidden="true"></i>
						</div>
			
						<nav class="navbar d-none d-lg-flex justify-content-end" id="navbar">

							<?php
							wp_nav_menu(
								array(
									'theme_location'  => 'Main',
									'container_class' => 'navbar-container mr-lg-50',
									'container_id'    => 'navbarNavDropdown',
									'menu_class'      => 'navbar-nav ml-auto',
									'fallback_cb'     => '',
									'menu_id'         => 'primary',
									'depth'           => 2,
									'walker'          => new EpicPress_WP_Bootstrap_Navwalker(),
									'hover dropdown'  => true,
								)
							);
							?>
							<div class="contact-us-button">
								<a class="btn btn-white" href="<?php echo $contact_us_link; ?>">Contact Us</a>
							</div>
						</nav>
					</div>

				</div>
			</nav>

		</header><!-- #masthead -->
		<div class="offcanvas-content">