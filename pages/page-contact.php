<?php
  $title = get_post_meta($post->ID, 'section_1_title', true);
  $content = get_post_meta($post->ID, 'section_1_content', true);
  $phone_number = get_post_meta($post->ID, 'phone_number', true);
  $address = get_post_meta($post->ID, 'address', true);
  $contact_form = get_post_meta($post->ID, 'contact_form', true);
  $map = get_post_meta($post->ID, 'map', true);
?>

<div id="contact-lets-talk-section" class="bg-orange">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 bg-orange lets-talk-left">
        <div class="row full-height">
          <div class="col-md-9 offset-md-2 margin-auto">
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
          <div class="col-md-9 offset-md-1">
            <?php echo do_shortcode($contact_form); ?>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt110">
      <div class="col-md-8 offset-md-2">
        <p class="lead-md text-white text-bold float-right">Address: <?php echo $address; ?></p>
        <p class="lead-md text-white text-bold">Phone: <a class="text-white" href="tel:<?php echo str_replace(' ', '', $phone_number); ?>"><?php echo $phone_number; ?></a></p>
      </div>
    </div>
  </div>
</div>

<?php echo do_shortcode($map); ?>
