<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 */
$inverted_logo = get_field('inverted_logo', 'option');
?>
<footer class="footer background-blue">
	<div class="container text-center d-md-flex justify-content-between">
		<a class="main-logo text-center" rel="home" href="<?php echo esc_url(home_url('/')); ?>" itemprop="url">
			<img src="<?php echo $inverted_logo['url'] ?>" alt="<?php echo $inverted_logo['alt'] ?: 'logo' ?>">
		</a>

		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'footer',
				// 'container_class' => 'navbar-container toggle-offcanvas d-lg-flex algin-content-center mr-lg-100',
				'container_class' => 'navbar-container d-md-flex algin-content-center toggle-offcanvas',
				'container_id'    => 'navbarNavDropdown',
				'menu_class'      => 'navbar-nav footer-menu ml-auto',
				'fallback_cb'     => '',
				'menu_id'         => 'footer',
				'depth'           => 2,
				'walker'          => new EpicPress_WP_Bootstrap_Navwalker(),
				'hover dropdown'  => true,
			)
		);
		?>
	</footer>

	<!-- DO NOT REMOVE  -->
	<!-- Used in JS to determine current breakpoint size -->
	<div class="device-sm d-lg-none"></div>
	<div class="device-lg d-none d-lg-block d-lg-none"></div>
	<div class="device-lg d-none d-lg-block"></div>

	</div>
	</div>
	<!--DO NOT REMOVE end #page -->

	<?php unsupported_browser_modal(); ?>
	<?php wp_footer(); ?>

	</body>

	</html>