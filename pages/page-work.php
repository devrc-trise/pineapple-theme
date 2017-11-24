<?php

$args = array(
  'category_name' => 'work',
  'meta_key' => 'post_order',
  'orderby' => 'meta_value',
  'order' => 'ASC'
);
$the_query = new WP_Query($args);
  while ($the_query->have_posts()) {
    $the_query->the_post();
    $background = get_post_meta($post->ID, 'background_image', true);
    ?>

    <div class="work-list-section mt20" style="background-image: url(<?php echo $background ?>);">
      <div class="container text-white">
        <div class="row">
          <div class="col-md-10 offset-md-1">
            <div class="row">
              <div class="col-md-8">
                <h1 class="text-uppercase"><?php echo the_title(); ?></h1>
                <div class="text-bold">
                  <?php echo the_content(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php
  }
?>
