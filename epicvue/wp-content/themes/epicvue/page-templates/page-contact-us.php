<?php 
/*
  Template Name: Contact Us
*/

get_header();

?>

<main id="primary" class="site-main page-template page-template--contact-us">
	<?php
	if (have_posts()) : while (have_posts()) : the_post();

			// are there any rows within within our flexible content?
			if (have_rows('content_builder')) :

				// loop through all the rows of flexible content
				while (have_rows('content_builder')) : the_row();

					// HERO CONTACT US
					if (get_row_layout() == 'hero') {
						get_template_part('components/content-builder/heros/hero-contact-us');
					}

					// TABBED CONTENT FORMS
					if (get_row_layout() == 'tabbed_contact_forms') {
						get_template_part('components/content-builder/body/tabbed-content-forms');
					}

					// LOCATIONS
					if (get_row_layout() == 'locations') {
						get_template_part('components/content-builder/body/locations');
					}

				endwhile; // close the loop of flexible content
			endif; // close flexible content conditional

		endwhile;
	endif; // close the WordPress loop 
	?>
</main>

<?php
get_footer();
