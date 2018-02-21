<?php $this_page = $post; ?>

<div class="cover-screen-wrapper">
  <div class="cover-screen text-center container-fluidx" style="background-image: url('<?php echo get_post_meta($this_page->ID, 'section_1_background_image', true); ?>');">
    <!-- <div class="welcome-message text-center font-harmonia-bold">
      We CREATE hospitality.
    </div> -->
    <span class="hidden-xs-down ">
      <video loop autoplay class="bv-video" data-src="<?php echo get_post_meta($this_page->ID, 'section_1_background_video', true); ?>"></video>
    </span>
    <div class="welcome-message-container font-harmonia-bold">
      <div id="welcome-message" class="text-center font-harmonia-bold"></div>
    </div>
    <br/>
    <a href="#our-work-section" class="our-work-link bounce">
      <svg xmlns="http://www.w3.org/2000/svg" width="49" height="26" viewBox="0 0 49 26">
        <path fill="#F3B237" fill-rule="nonzero" d="M24.499 22.26L2.82.894A1.368 1.368 0 0 0 .9.894a1.321 1.321 0 0 0 0 1.894l22.643 22.318a1.368 1.368 0 0 0 1.921 0L48.098 2.788c.261-.258.402-.605.402-.942 0-.337-.13-.684-.402-.942a1.368 1.368 0 0 0-1.922 0L24.5 22.26z"/>
      </svg>
    </a>
  </div>
</div>

<div id="our-work-section" class="bg-orange text-white bg-bubble">
  <div class="wrapper">
    <div class="container">
      <div class="row">
        <div class="col-xl-7 offset-xl-2 col-lg-8 offset-lg-2">
          <h1 class="text-uppercase"><?php echo get_post_meta($this_page->ID, 'section_2_title', true); ?></h1>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-5 col-md-6 col-lg-4 offset-xl-2 offset-lg-2">
          <div class="line-white mt10 mb25"></div>
        </div>
        <div class="col-sm-7 col-md-6 col-lg-4 our-work-list">
          <?php echo get_post_meta($this_page->ID, 'section_2_content', true); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="testimonials-section" class="bg-gray">
  <div class="container">
    <div id="testimonials-carousel" class="carousel slide" data-ride="carousel">
      <div class="row justify-content-center">
        <div class="col-md-11">
          <div class="carousel-inner" role="listbox">
            <?php

            $args = array(
              'category_name' => 'testimonial',
              'meta_key' => 'sort',
              'orderby' => 'meta_value',
              'order' => 'ASC',
              'posts_per_page' => -1
            );
            $the_query = new WP_Query($args);
            $postCount = 0;
            while ($the_query->have_posts()) {
              $postCount++;
              $the_query->the_post();
              $author_img = get_post_meta($post->ID, 'author_image', true);
              $message = get_post_meta($post->ID, 'message', true);
              ?>

              <div class="carousel-item <?php echo $postCount == 1 ? 'active' : ''; ?>">
                <div class="row justify-content-center">
                  <div class="col-md-3 author">
                    <img src="<?php echo $author_img; ?>" width="204px" class="img-circle orange">
                  </div>
                  <div class="col-md-9">
                    <div class="row justify-content-center">
                      <div class="col-2 col-xl-2 text-right">
                        <img class="left-quote" src="/wp-content/uploads/2017/11/left-quote.png">
                      </div>
                      <div class="col-10 col-xl-9">
                        <p class="lead-sm mb20"><?php echo $message; ?></p>
                        <p class="lead-md font-harmonia-bold"><?php echo the_title(); ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <?php
            }

            ?>
          </div>
        </div>
      </div>
      <ol class="carousel-indicators">
        <?php
          for ($i = 0; $i < $postCount; $i++) {
            $class = ($i == 0) ? 'active' : '';
            echo "<li data-target='#testimonials-carousel' data-slide-to='$i' class='$class'></li>";
          }
        ?>
      </ol>
      <a class="carousel-control-prev" href="#testimonials-carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#testimonials-carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
</div>

<div id="know-us-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1 class="heading-lg"><?php echo get_post_meta($this_page->ID, 'section_4_title', true); ?></h1>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-8">
            <div class="line-orange mb20"></div>
          </div>
        </div>
        <?php echo get_post_meta($this_page->ID, 'section_4_content', true); ?>
      </div>
    </div>
  </div>
</div>

<div id="clients-sections" class="bg-gray">
  <?php include 'sections/clients.php' ?>
</div>

<div id="lets-talk-section">
  <div class="container-fluid">
    <div class="row hidden-sm-down">
      <div class="col-md-6 bg-gray pt20">&nbsp;</div>
      <div class="col-md-6 pt20">&nbsp;</div>
    </div>
    <div class="row">
      <div class="col-md-6 bg-orange lets-talk-left">
        <div class="row">
          <div class="col-md-9 offset-md-2">
            <h1 class="text-white"><?php echo get_post_meta($this_page->ID, 'section_6_title', true); ?></h1>
            <div class="row mb20">
              <div class="col-md-8">
                <div class="line-white"></div>
              </div>
            </div>
            <?php echo get_post_meta($this_page->ID, 'section_6_content', true); ?>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-9 offset-md-1">
            <div class="mt50 pb60">
              <?php echo do_shortcode(get_post_meta($this_page->ID, 'contact_form', true)) ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row hidden-sm-down">
      <div class="col-md-8 bg-orange pt65">&nbsp;</div>
      <div class="col-md-4 bg-gray pt65">&nbsp;</div>
    </div>
  </div>
</div>
