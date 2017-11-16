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
                  <div class="logo">
                    <a href="<?php echo get_site_url(); ?>"><?php 
                      $logo = get_field( 'website_logo', 'options' );
		                  if ( $logo ) :
                        echo file_get_contents( $logo['url'] );
                      endif; ?><?php if ( is_front_page() ) : ?><h1><?php else: ?><span class="logo-span"><?php endif; ?>mooroolbark <strong>baptist</strong> church&nbsp;&nbsp;&nbsp;<?php if ( is_front_page() ) : ?></h1><?php else: ?></span><?php endif; ?></a>
                    </div>
                </div>
            </header><!-- #masthead -->
            <div class="site-content">