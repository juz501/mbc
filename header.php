<?php
/**
 * Header file used for all templates
 */

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
      <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N7BGFZ6');</script>
<!-- End Google Tag Manager -->
  </head>
  <body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N7BGFZ6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div id="page" class="site">
      <header id="masthead" class="site-header" role="banner">
        <div class="wrap">
          <?php get_template_part( 'content-templates/content', 'logo' ); ?>
        </div>
      </header><!-- #masthead -->
      <div class="site-content">
<?php
