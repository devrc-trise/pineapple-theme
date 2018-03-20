<?php
  $title = get_post_meta($post->ID, 'section_1_title', true);
  $content = get_post_meta($post->ID, 'section_1_content', true);
  $phone_label = get_post_meta($post->ID, 'phone_label', true);
  $phone_number = get_post_meta($post->ID, 'phone_number', true);
  $address_label = get_post_meta($post->ID, 'address_label', true);
  $address = get_post_meta($post->ID, 'address', true);
  $contact_form = get_post_meta($post->ID, 'contact_form', true);
?>

<div id="contact-lets-talk-section" class="bg-orange">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 bg-orange lets-talk-left">
        <div class="row full-height">
          <div class="col-md-10 col-xl-9 offset-md-1 offset-xl-2 margin-auto">
            <h1 class="heading-lg text-white"><?php echo $title; ?></h1>
            <div class="row mb20">
              <div class="col-md-8">
                <div class="line-white"></div>
              </div>
            </div>
            <?php echo $content; ?>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="offset-xl-1 col-xl-9 col-lg-11 col-md-11">
            <?php echo do_shortcode($contact_form); ?>
          </div>
        </div>
      </div>
    </div>
    <div class="row contact-details">
      <div class="offset-xl-2 col-xl-8 offset-md-1 col-md-10 clearfix">
        <p class="lead-md text-white text-bold float-lg-left"><?php echo $phone_label; ?>: <a class="text-white" href="tel:<?php echo str_replace(' ', '', $phone_number); ?>"><?php echo $phone_number; ?></a></p>
        <p class="lead-md text-white text-bold float-lg-right"><?php echo "$address_label: $address"; ?></p>
      </div>
    </div>
  </div>
</div>
