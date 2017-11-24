<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="page">
    <header>
      <!-- <nav class="navbarx navbar-darkx bg-transparent"> -->
      <nav class="navpine bg-transparent">
        <div class="container">
          <?php if ($pagename): ?>
            <div class="row">
              <div class="col-md-10 offset-md-1">
                <img class="logo" src="/wp-content/uploads/2017/11/pineapple-logo.png">
              </div>
            </div>
          <?php else: ?>
            <img class="logo" src="/wp-content/uploads/2017/11/pineapple-logo.png">
            <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button> -->
          <?php endif; ?>
        </div>
      </nav>
      <!-- <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
          <h4 class="text-white">Collapsed content</h4>
          <span class="text-muted">Toggleable via the navbar brand.</span>
        </div>
      </div> -->
    </header>
