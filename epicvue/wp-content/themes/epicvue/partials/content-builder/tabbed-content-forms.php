<?php

/** Partial to display Tabbed Content Forms - tabbed-content-forms.php */
?>
<div class="tabbed-content-forms">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="content m-auto">

          <?php

          // *Repeater
          // tabbed_items
          // *Sub-Fields
          // type
          // phone
          // email
          // form-embed

          // check if the repeater field has rows of data
          if (have_rows('tabbed_items')) :
            $i = 1; // Set the increment variable

            echo '<ul class="nav nav-tabs" id="myTab" role="tablist">';

            // loop through the rows of data for the tab type
            while (have_rows('tabbed_items')) : the_row();
              $type = get_sub_field('type');
          ?>

              <li class="nav-item">
                <a class="nav-link text-center <?php if ($i == 1) echo 'active'; ?>" id="<?php echo sanitize_title($type); ?>-tab" data-toggle="tab" href="#<?php echo sanitize_title($type); ?>" role="tab" aria-controls="<?php echo sanitize_title($type); ?>" aria-selected="true"><?php echo $type; ?></a>
              </li>

            <?php $i++; // Increment the increment variable

            endwhile; //End the loop 

            echo '</ul>
            <hr class="d-block d-lg-none w-75" />
	          <div class="tab-content" id="myTabContent">';
            $i = 1; // Set the increment variable

            // loop through the rows of data for the tab content
            while (have_rows('tabbed_items')) : the_row();
              $type = get_sub_field('type');
              $phone = get_sub_field('phone');
              $email = get_sub_field('email');
              $form_embed = get_sub_field('form_embed');
            ?>

              <div class="tab-pane fade show <?php if ($i == 1) echo 'active'; ?>" id="<?php echo sanitize_title($type); ?>" role="tabpanel" aria-labelledby="<?php echo sanitize_title($type); ?>-tab">
              <div class="tab-content-top d-flex flex-column flex-lg-row">
                <div class="tab-content-top-phone d-flex flex-column mb-4 mb-md-0"><span class="mb-2"><?php echo $type; ?> Phone</span><span><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></span></div>
                <div class="tab-content-top-email d-flex flex-column"><span class="mb-2">Email</span><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></div>
              </div>
                <div class="tab-content-form">
                  <?php echo do_shortcode($form_embed); ?> 
                </div>
              </div>

          <?php $i++; // Increment the increment variable

            endwhile; //End the loop 

            echo '</div>';

          else :

          // no rows found

          endif;
          ?>
        </div>
      </div>
    </div>
  </div>
</div>