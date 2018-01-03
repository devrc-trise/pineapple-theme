<?php $this_page = $post; ?>
<?php $background_video = get_post_meta($this_page->ID, 'section_1_background_video', true); ?>

<div id="about-welcome-section" class="cover-screen" style="background-image: url(<?php echo get_post_meta($this_page->ID, 'section_1_background_image', true); ?>);">
  <video id="welcome-video" loop>
    <source src="<?php echo $background_video; ?>" type="video/mp4">
    Your browser does not support the video tag.
  </video>
  <div class="container text-white">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="row">
          <div class="col-lg-11">
            <?php if (!empty($background_video)) { ?>
              <span id="play-button" class="play-button" onclick="play();">
                <svg xmlns="http://www.w3.org/2000/svg" width="95" height="95" viewBox="0 0 95 95">
                  <path fill="#FFF" fill-rule="nonzero" d="M47.5 0C21.267 0 0 21.266 0 47.5S21.267 95 47.5 95 95 73.734 95 47.5 73.733 0 47.5 0zm16.417 50.018l-23.75 14.844a2.97 2.97 0 0 1-4.542-2.518V32.656a2.968 2.968 0 0 1 4.542-2.518l23.75 14.844a2.972 2.972 0 0 1 0 5.036z"/>
                </svg>
              </span>
            <?php } ?>
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
  <?php include 'sections/clients.php' ?>
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


<script type="text/javascript">
  function play() {
    var video = document.getElementById('welcome-video');
    var button = document.getElementById('play-button');
    video.play();
    button.style.display = 'none';
    video.style.zIndex = 0;
  }
</script>
