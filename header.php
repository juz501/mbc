<?php

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <?php wp_head(); ?>
      <script>
          jQuery(document).ready(function() {
              jQuery('body').addClass('loaded');
          });
      </script>
  </head>
  <body <?php body_class(); ?>>
    <div id="page" class="site">
      <header id="masthead" class="site-header" role="banner">
        <div class="wrap">
          <?php get_template_part( 'content-templates/content', 'logo' ); ?>
        </div>
      </header><!-- #masthead -->
      <div class="site-content">