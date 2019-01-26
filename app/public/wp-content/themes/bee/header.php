<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

      <header class="header">
        <div class="container header__container">
          <div class="header__inner">
            <div class="header__logo">
              <a href="/">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/logo.svg" />
              </a>
            </div>
            <div class="header__menu">
              <?php
                if (has_nav_menu('primary_navigation')) :
                  wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'header__menu-list']);
                endif;
              ?>
            </div>
            <div class="header__toggle">
              <a href="#" class="menu-btn">
                <span></span>
              </a>
            </div>
          </div>
        </div>
      </header>

      <div id="barba-wrapper">
        <div class="barba-container">