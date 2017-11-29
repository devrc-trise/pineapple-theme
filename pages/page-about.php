<?php $this_page = $post; ?>

<div id="about-welcome-section" class="cover-screen" style="background-image: url('<?php echo get_post_meta($this_page->ID, 'section_1_background_image', true); ?>');">
  <div class="container text-white">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="row">
          <div class="col-lg-11">
            <span class="play-button">
              <svg xmlns="http://www.w3.org/2000/svg" width="95" height="95" viewBox="0 0 95 95">
                <path fill="#FFF" fill-rule="nonzero" d="M47.5 0C21.267 0 0 21.266 0 47.5S21.267 95 47.5 95 95 73.734 95 47.5 73.733 0 47.5 0zm16.417 50.018l-23.75 14.844a2.97 2.97 0 0 1-4.542-2.518V32.656a2.968 2.968 0 0 1 4.542-2.518l23.75 14.844a2.972 2.972 0 0 1 0 5.036z"/>
              </svg>
            </span>
            <div class="row">
              <div class="col-md-11">
                <h1 class="text-uppercase">
                  <?php echo get_post_meta($this_page->ID, 'section_1_title', true); ?>
                </h1>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-10 col-lg-8 text-bold">
            <?php echo get_post_meta($this_page->ID, 'section_1_content', true); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="owners-section" class="bg-gray">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="row justify-content-center">
          <?php

          $args = array(
            'category_name' => 'about_us',
            'meta_key' => 'sort',
            'orderby' => 'meta_value',
            'order' => 'ASC'
          );
          $the_query = new WP_Query($args);
          $postCount = 0;
          while ($the_query->have_posts()) {
            $postCount++;
            $the_query->the_post();
            $author_img = get_post_meta($post->ID, 'picture', true);
            ?>

            <div class="col-11 col-sm-10 col-md-5 <?php echo $postCount % 2 == 0 ? 'offset-md-1 offset-lg-2' : '' ?>">
              <div class="text-center mt50">
                <img src="<?php echo get_post_meta($post->ID, 'picture', true); ?>" class="img-circle orange mb20" width="180px" />
                <p class="lead-md font-harmonia-black mb15"><?php echo the_title(); ?></p>
              </div>
              <div class="lead-xs"><?php echo the_content(); ?></div>
            </div>

            <?php
          }

          ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="clients-sections">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-4">
        <div class="img-wrapper text-center">
          <img src="/wp-content/uploads/2017/11/marriott.png" width="156px">
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="img-wrapper text-center">
          <img src="/wp-content/uploads/2017/11/charlottes-w5.png" width="255px">
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="img-wrapper text-center">
          <img src="/wp-content/uploads/2017/11/labs.png" width="187px">
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="img-wrapper text-center">
          <img src="/wp-content/uploads/2017/11/rut.png" width="121px">
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="img-wrapper text-center">
          <img src="/wp-content/uploads/2017/11/bnl.png" width="292px">
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="img-wrapper text-center">
          <img src="/wp-content/uploads/2017/11/sager-wild.png" width="195px">
        </div>
      </div>
      <div class="col-md-12">
        <div class="img-wrapper text-center mb0">
          <img src="/wp-content/uploads/2017/11/goodman.png" width="358px">
        </div>
      </div>
    </div>
  </div>
</div>

<div id="about-contact-section" class="bg-orange">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-11">
        <?php echo do_shortcode(get_post_meta($this_page->ID, 'contact_form', true)) ?>
      </div>
    </div>
  </div>
</div>
