<?php

$args = array(
  'category_name' => 'work',
  'meta_key' => 'sort',
  'orderby' => 'meta_value',
  'order' => 'ASC'
);
$the_query = new WP_Query($args);
while ($the_query->have_posts()) {
  $the_query->the_post();
  $background = get_post_meta($post->ID, 'background_image', true);
  $right_title = get_post_meta($post->ID, 'right_title', true);
  $right_content = get_post_meta($post->ID, 'right_content', true);
  ?>

  <div class="work-list-section" style="background-image: url(<?php echo $background ?>);">
    <div class="container text-white">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="row">
            <div class="col-xs-10 col-md-10 col-lg-8">
              <h1 class="text-uppercase"><?php echo the_title(); ?></h1>
              <div class="text-bold">
                <?php echo the_content(); ?>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="line-white-xs line-separator pull-left"></div>
              <div class="work-right">
                <p class="lead-xl text-bold"><?php echo $right_title; ?></p>
                <?php echo $right_content; ?>
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
