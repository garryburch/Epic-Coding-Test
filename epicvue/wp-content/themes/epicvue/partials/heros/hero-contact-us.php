<?php

/** Partial to display Hero Contact Us - hero-contact-us.php */
?>
<?php
$heading = get_sub_field('heading');
$sub_heading = get_sub_field('sub_heading');
?>
<div class="hero-contact-us">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="content">
          <?php
          if ($heading) {
          ?>
            <h1 class="heading mb-3">
              <?php
              echo $heading;
              ?>
            </h1>
          <?php
          }
          ?>
          <?php
          if ($sub_heading) {
          ?>
            <p class="heading-sub">
              <?php
              echo $sub_heading;
              ?>
            </p>
          <?php
          }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>