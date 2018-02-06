<div class="container">
  <p class="lead-lg text-bold text-center font-harmonia-black title">PEOPLE WE'VE WORKED WITH<span class="text-orange">.</span></p>
  <div class="row justify-content-center">
    <?php
    $args = array(
      'category_name' => 'logo',
      'meta_key' => 'sort',
      'orderby' => 'meta_value',
      'order' => 'ASC'
    );

    $the_query = new WP_Query($args);
    while ($the_query->have_posts()) {
      $the_query->the_post();
      $logo = get_post_meta($post->ID, 'logo', true);
      $width = get_post_meta($post->ID, 'width', true);
      ?>

      <div class="col-4">
        <div class="img-wrapper text-center">
          <img src="<?php echo $logo; ?>" width="<?php echo $width; ?>">
        </div>
      </div>

    <?php } ?>
  </div>
</div>
