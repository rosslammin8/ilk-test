<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ilk Test</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/vendor/normalize.css">
    <link rel="stylesheet" href="./assets/dist/styles.min.css">
  </head>
  <body>
    <div class="page-wrapper">

      <?php
        /**
         * Header
         * 
         * The header is made up of 3 components:
         * • Left header menu
         * • Logo
         * • Right header menu
         * 
         * The header also has a visually hidden h1 tag for SEO and screen reader 
         */
      ?>
      <header class="c-header">
        <div class="c-header__wrapper c-grid c-grid--justify-center c-grid--align-center">
          <?php
            wp_nav_menu(
              [
                'theme_location' => 'header-left-menu'
              ] 
            ); 
          ?>

          <a class="c-logo" href="#"><img class="c-logo__img" src="./assets/icons/header-logo.svg" alt="logo"></a>
          <h1 class="screen-reader-text">Tombola</h1>

          <?php
            wp_nav_menu(
              [
                'theme_location' => 'header-right-menu'
              ] 
            ); 
          ?>
        </div>
      </header>

    <?php 
      /**
       * Hero
       * 
       * The hero takes 5 options
       * • Title
       * • Sub-Title
       * • Title Background
       * • Sub-Title Background
       * • Background Image
       */
    ?>
    <?php
      $hero_title              = get_field('hero_title')                ?? '';
      $hero_sub_title          = get_field('hero_title')                ?? '';
      $hero_title_bg_color     = get_field('hero_title-background')     ?? 'white';
      $hero_sub_title_bg_color = get_field('hero_sub-title-background') ?? 'white';
      $hero_bg_image           = get_field('hero_background-image')     ?? '';

      if ($hero_title_bg_color) {
        $title_bg_color = sprintf('bg-%s', $hero_title_bg_color);
      }

      if ($hero_sub_title_bg_color) {
        $sub_title_bg_color = sprintf('bg-%s', $hero_sub_title_bg_color);
      }
    ?>
      <div class="c-hero"
        <?php if ($hero_bg_image) : ?>
          style="background-image: url(<?php echo get_field('hero_background-image'); ?>);"
        <?php endif; ?> 
      >
        <div class="c-hero__wrapper">
          <div class="c-hero__content">
            <?php if ($hero_title) : ?>
              <div class="c-grid c-grid--justify-center">
                <h2 class="c-hero__title <?php echo $hero_title_bg_color; ?>"><?php echo $hero_title; ?></h2>
              </div>
            <?php endif; ?>

            <?php if ($hero_sub_title) : ?>
              <div class="c-grid c-grid--justify-center">
                <h3 class="c-hero__sub-title <?php echo $hero_sub_title_bg_color ?>"><?php echo $hero_sub_title; ?></h3>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>

      <?php 
      /**
       * Wrapper
       * 
       * The wrapper component is used to display a simple panel
       * that uses a
       * • Background Colour
       * • Title
       * • Text
       */
      ?>
      <?php
        $wrapper_classes = [
          'c-wrapper',
          'c-wrapper__pad-large',
          'c-wrapper__small'
        ];

        $wrapper_bg_color = get_field('wrapper_bg-color') ?? '';
        $wrapper_title    = get_field('wrapper_title')    ?? '';
        $wrapper_text     = get_field('wrapper_text')     ?? '';

        if ($wrapper_bg_color) {
          $wrapper_classes[] = sprintf('bg-%s', $wrapper_bg_color);
        }
      ?>
      <div class="<?php echo implode(' ', $wrapper_classes); ?>">
        <?php if ($wrapper_title) : ?>
          <h2 class="c-wrapper__title"><?php echo $wrapper_title; ?></h2>
        <?php endif; ?>

        <?php if ($wrapper_text) : ?>
          <p class="c-wrapper__text"><?php echo $wrapper_text; ?></p>
        <?php endif; ?>
      </div>


      <?php 
        /**
         * Grid Block
         * 
         * This component uses a grid of blocks.
         * The item column size is defined by grid-block_size
         */
      ?>
      <?php if (have_rows('grid-block')) : ?>
        <?php 
          $grid_size = get_field('grid-block_size') ?? ''; 
          if ($grid_size) {
            $grid_size_class = sprintf('c-grid--item-%s', $grid_size);
          }
        ?>

        <div class="c-grid">

          <?php while (have_rows('grid-block')) : the_row(); ?>
            <?php 
            /**
             * Block
             * 
             * The block component is made up of 
             * • Title
             * • Sub-Title
             * • Title colour
             * • Sub-Title colour
             * • Action
             * 
             * The action is an ACF link field
             * the action border is an ACF true/false value that add the bordered class to the button
             */
              $block_classes = [
                $grid_size_class,
                'c-block'
              ];

              $block_fill_color     = get_sub_field('block_fill-color')       ?? 'white'; 
              $block_bg_image       = get_sub_field('block_bg-image')         ?? ''; 
              $block_title          = get_sub_field('block_title')            ?? ''; 
              $block_sub_title      = get_sub_field('block_sub-title')        ?? '';
              $block_action         = get_sub_field('block_action')           ?? [];
              $block_action_border  = get_sub_field('block_action-bordered')  ?? false;

              $block_action_classes = [
                'c-button'
              ];
              
              if ($block_action_border) {
                $block_action_classes[] = 'c-button__bordered';
              }

              if ($block_fill_color) {
                $block_action_classes[] = sprintf('c-button__bordered-%s', $block_fill_color);
              }
 
              if (isset($block_action) && is_array($block_action) && !empty($block_action)) {
                $block_action_url   = $link['url']   ?? '#';
                $block_action_label = $link['label'] ?? '';
              }
            ?>

            <div class="<?php echo implode(' ', $block_classes); ?>">
              <div class="c-block__wrapper c-grid c-grid--direction-column c-grid--space-between">

                <?php if ($block_title) : ?>
                  <h2><?php echo $block_title; ?></h2>
                <?php endif; ?>

                <?php if ($block_sub_title) : ?>
                  <p><?php echo $block_sub_title; ?></p>
                <?php endif; ?>

                <?php if ($block_action_url && $block_action_label) : ?>
                  <a class="<?php echo implode(' ', $block_action_classes); ?>" href="<?php echo esc_url($block_action_url); ?>"><?php echo esc_html($block_action_label); ?></a>
                <?php endif; ?>

              </div>
            </div>
          <?php endwhile; ?>

        </div>
      <?php endif; ?>



      <?php 
      /**
       * Grid Stats
       * 
       * The grid stats is just a row of stats that contains a
       * • Icon
       * • Horizontal Divider
       * • Title
       * • Optional pre title
       * • Small text
       * 
       * The stats line up together flush to create a line between them all
       * and displays an icon above the line and text below.
       */
      ?>
      <?php if (have_rows('grid-stats')) : ?>
        <div class="c-wrapper c-wrapper__pad-large c-wrapper__large">
          <div class="c-grid c-stats-list">

            <?php while (have_rows('grid-stats')) : the_row(); ?>
              <?php 
                $grid_stats_classes = [
                  'c-stats-list__item',
                  'c-grid',
                  'c-grid--direction-column',
                  'c-grid--justify-center',
                  'c-grid--item-quarter'
                ];
                $grid_stats_fill_color     = get_sub_field('grid-stats_fill_color')    ?? '';

                $grid_stats_icon           = get_sub_field('grid-stats_icon')          ?? '';
                $grid_stats_icon_size      = get_sub_field('grid-stats_icon_size')     ?? '';

                $grid_stats_icon_classes = [
                  'c-stats-list__icon',
                  'c-icon'
                ];

                foreach ([
                  $grid_stats_icon,
                  $grid_stats_fill_color,
                  $grid_stats_icon_size
                ] as $prop) {
                  $grid_stats_icon_classes[] = sprintf('c-icon__%s', $prop);
                }

                $grid_stats_divider        = get_sub_field('grid-stats_divider')       ?? true;
                $grid_stats_divider_size   = get_sub_field('grid-stats_divider_size')  ?? '';

                $grid_stats_divider_classes = [
                  'c-stats-list__divider'
                ];

                foreach ([
                  $grid_stats_divider_size,
                  $grid_stats_fill_color
                ] as $prop) {
                  $grid_stats_icon_classes[] = sprintf('c-stats-list__divider__%s', $prop);
                }

                $grid_stats_title          = get_sub_field('grid-stats_title')         ?? '';
                $grid_stats_pre_title      = get_sub_field('grid-stats_pre-title')     ?? '';

                $grid_stats_sub_text       = get_sub_field('grid-stats_sub-text')      ?? '';
              ?>
              
              <div class="<?php echo implode(' ', $grid_stats_classes); ?>">
                <div class="<?php echo implode(' ', $grid_stats_icon_classes); ?>"></div>
                <div class="<?php echo implode(' ', $grid_stats_divider_classes); ?>"></div>

                <?php if ($grid_stats_title) : ?>
                  <p class="c-stats-list__title">
                    <?php if ($grid_stats_pre_title) : ?>
                      <span class="c-stats-list__pre-title"><?php echo $grid_stats_pre_title; ?></span>
                    <?php endif; ?>
                    <?php echo $grid_stats_title; ?>
                  </p>
                <?php endif; ?>

                <?php if ($grid_stats_sub_text) : ?>
                  <span class="c-stats-list__small-text"><?php echo $grid_stats_sub_text; ?></span>
                <?php endif; ?>
              </div>

            <?php endwhile; ?>

          </div>
        </div>
      <?php endif; ?>
          


      <?php 
      /**
       * Wrapper
       * 
       * The wrapper component is used to display a simple panel
       * that uses a
       * • Fill Colour
       * • Title
       * • Text
       * • Action
       */
      ?>
      <?php
        $wrapper_classes = [
          'c-wrapper',
          'c-wrapper__pad-small',
          'c-wrapper__small',
          'c-grid',
          'c-grid--justify-center'
        ];

        $wrapper_fill_color     = get_field('wrapper_fill-color') ?? '';
        $wrapper_title          = get_field('wrapper_title')    ?? '';
        $wrapper_text           = get_field('wrapper_text')     ?? '';
        $wrapper_action         = get_sub_field('wrapper_action')           ?? [];
        $wrapper_action_border  = get_sub_field('wrapper_action-bordered')  ?? false;

        $wrapper_action_classes = [
          'c-button'
        ];
        
        if ($wrapper_action_border) {
          $wrapper_action_classes[] = 'c-button__bordered';
        }

        if ($wrapper_fill_color) {
          $wrapper_action_classes[] = sprintf('c-button__bordered-%s', $wrapper_fill_color);
        }

        if (isset($wrapper_action) && is_array($wrapper_action) && !empty($wrapper_action)) {
          $wrapper_action_url   = $link['url']   ?? '#';
          $wrapper_action_label = $link['label'] ?? '';
        }

        if ($wrapper_fill_color) {
          $wrapper_bg_color = sprintf('bg-%s', $wrapper_fill_color) ?? '';
        }
      ?>

      <div class="<?php echo $wrapper_bg_color; ?>">
        <div class="<?php echo implode(' ', $wrapper_classes); ?>">
          <?php if ($wrapper_text) : ?>
            <p class="c-wrapper__text"><?php echo $wrapper_text; ?></p>
          <?php endif; ?>
          
          <?php if ($wrapper_action_url && $wrapper_action_label) : ?>
            <a class="<?php echo implode(' ', $wrapper_classes); ?>" href="<?php echo $wrapper_action_url; ?>"><?php echo $wrapper_action_title; ?></a>
          <?php endif; ?>
        </div>
      </div>


      <?php 
      /**
       * Footer
       * 
       * The footer displays a lot of information including a sign up
       * form which would usually be posted to a third party sevice like mailchimp.
       * 
       * The is also a lot of global information that is taken from the ACF
       * options page and can be reused anywhere on the site.
       * 
       * It also includes a footer menu set up with the wordpress menu functionality.
       * 
       * Lastly it auto generates the copywrite info with the site name of listed 
       * in the admin options settings and the current year, prefixed with a 
       * copywrite symbols.
       */
      ?>
      <?php 
        $footer_bg_color       = get_field('footer_bg-color')                 ?? '';
        $footer_title          = get_field('footer_title')                    ?? '';
        $footer_address_title  = get_field('global_address-title', 'option')  ?? '';
        $footer_address        = get_field('global_address', 'option')        ?? '';
        $footer_tel            = get_field('footer_tel', 'option')            ?? '';
        $footer_email          = get_field('footer_email', 'option')          ?? '';

        if ($footer_bg_color) {
          $footer_bg_color = sprintf('bg-black', $footer_bg_color);
        }
      ?>
      <footer class=" c-footer">
        <div class="c-wrapper c-wrapper c-wrapper__pad-small c-wrapper__medium">
          <div class="c-grid">

            <div class="c-grid--footer-left">
              <div class="c-footer__vertical-divider">
                <?php if ($footer_title) : ?>
                  <p class="c-footer__title"><?php echo $footer_title; ?></p>
                <?php endif; ?>

                <form method="post" class="c-grid c-grid--no-wrap c-footer__signup">
                  <label class="screen-reader-text" for="join-email"></label>
                  <input id="join-email" type="email" name="join-email">
                  <input type="submit">
                </form>

                <p class="c-footer__address-title text-teal"><?php echo $footer_address_title; ?></p>
                <address class="c-footer__address">
                  <?php echo $footer_address; ?>
                </address>

                <div class="c-footer__contact">
                  <?php if ($footer_tel) : ?>
                    <div class="c-footer__contact-info"><span class="text-teal">Telephone. </span><a class="text-white" href="tel: <?php echo $footer_tel; ?>"><?php echo $footer_tel; ?></a></div>
                  <?php endif; ?>

                  <?php if ($footer_email) : ?>
                    <div class="c-footer__contact-info"><span class="text-teal">Email. </span><a class="text-white" href="mailto: <?php echo $footer_email; ?>"><?php echo $footer_email; ?></a></div>
                  <?php endif; ?>
                </div>

                <div class="c-grid c-social-icons">
                  <div class="c-icon--small c-icon__twitter c-social-icon"><span class="screen-reader-text">Twitter</span></div>
                  <div class="c-icon--small c-icon__linkedin c-social-icon"><span class="screen-reader-text">Linkedin</span></div>
                </div>
              </div>
            </div>

            <div class="c-grid c-grid--direction-column c-grid--footer-right c-grid--justify-end c-footer__right">
              <p class="text-teal"><?php _e('Navigate'); ?></p>
              <div class="c-footer__navigation">
              <?php
                wp_nav_menu(
                  [
                    'theme_location' => 'footer-menu'
                  ] 
                ); 
              ?>
              </div>

              <div class="c-grid c-grid--space-between">
                <a class="text-white" href="<?php echo get_the_privacy_policy_link(); ?>"><?php _e('Privacy policy'); ?> </a>
                <span>|</span>
                <span>&copy; <?php echo join(' ', [get_bloginfo('name'), date('Y')]); ?></span>
              </div>
            </div>
          </div>
        </div>
      </footer>

    </div>
  </body>
</html>
