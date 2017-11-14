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
                    <?php 
                      $logo = get_field( 'website_logo', 'options' );
                      $logo_white = get_field( 'website_white_logo', 'options' );
                      ?><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" width="<?php echo $logo['width']; ?>" height="<?php echo $logo['height']; ?>" />
                </div>
            </header><!-- #masthead -->
            <div class="site-content">