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
      <?php if ($pagename): ?>
        <nav class="navbar navbar-light nothome mb25" role="navigation">
          <div class="container">
            <div class="row">
              <div class="col-md-10 offset-md-1">
                <a href="/"><img class="logo" src="/wp-content/uploads/2017/11/pineapple-dark-logo.png"></a>
                <button class="navbar-toggler float-right navbar-toggle" id="navbarSideButton" type="button">
                  <span class="navbar-toggler-custom-icon bg-orange">&nbsp;</span>
                  <span class="navbar-toggler-custom-icon bg-orange">&nbsp;</span>
                  <span class="navbar-toggler-custom-icon bg-orange">&nbsp;</span>
                </button>
              </div>
            </div>
          </div>
          <!-- navbar-side will go here -->
          <ul class="navbar-side" id="navbarSide">
            <?php
            foreach (wp_get_nav_menu_items('Main Menu') as $menu_item) {
              echo "<li class='navbar-side-item'>
                      <a href='$menu_item->url' class='side-link text-white lead-md text-uppercase'>$menu_item->title</a>
                    </li>";
            }
            ?>
          </ul>
          <div class="overlay"></div>
        </nav>
      <?php else: ?>
        <nav class="navbar navbar-dark bg-transparent">
          <div class="container">
            <img class="logo" src="/wp-content/uploads/2017/11/pineapple-logo.png">
          </div>
        </nav>
      <?php endif; ?>
    </header>
