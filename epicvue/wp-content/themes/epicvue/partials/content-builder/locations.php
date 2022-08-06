<?php

/** Partial to display Locations - locations.php */
?>
<div class="locations">
  <div class="container">
    <div class="row justify-content-between">

      <?php if (have_rows('location_items')) : ?>

        <?php while (have_rows('location_items')) : the_row(); ?>

          <?php $post_object = get_sub_field('location'); ?>

          <?php if ($post_object) : ?>

            <?php
            $post = $post_object;
            $address_one = get_field('address_one', $post->ID);
            $address_two = get_field('address_two', $post->ID);
            $city = get_field('city', $post->ID);
            $state = get_field('state', $post->ID);
            $zip_code = get_field('zip_code', $post->ID);
            $phone = get_field('phone', $post->ID);
            $image = get_field('image', $post->ID);
            $image_alt = $image['alt'];
            setup_postdata($post);
            ?>

            <div class="col-md-6">
              <div class="content <?php if (get_row_index() % 2 == 0) {
                                    echo "mx-auto mr-md-0 ml-md-auto";
                                    if (get_row_index() - 1) {
                                      echo " last-item";
                                    }
                                  } else {
                                    echo "mx-auto ml-md-0 mr-md-auto";
                                    if (get_row_index() - 1) {
                                      echo " last-item";
                                    }
                                  } ?>">
                <h5 class="title pb-2"><?php echo the_title(); ?></h5>
                <div class="address d-flex flex-column">
                  <span><?php echo $address_one ?></span>
                  <?php if ($address_two) : ?>
                    <span><?php echo $address_two; ?></span>
                  <?php endif; ?>
                  <div class="d-flex">
                    <span><?php echo $city; ?>,</span>&nbsp;
                    <span><?php echo $state; ?></span>&nbsp;
                    <span><?php echo $zip_code; ?></span>
                  </div>
                  <span class="phone"><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></span>
                </div>
                <?php if ($image) : ?>
                  <div class="image">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image_alt; ?>" loading="lazy" />
                  </div>
                <?php endif; ?>
              </div>
            </div>

            <?php wp_reset_postdata(); ?>

          <?php endif; ?>

        <?php endwhile; ?>

      <?php endif; ?>

    </div>
  </div>
</div>