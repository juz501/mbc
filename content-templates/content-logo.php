<div class="logo">
  <a href="<?php echo get_site_url(); ?>"><?php 
    $logo = get_field( 'website_logo', 'options' );
    if ( $logo ) :
      echo file_get_contents( $logo['url'] );
    endif; ?><?php if ( is_front_page() ) : ?><h1><?php else: ?><span class="logo-span"><?php endif; ?>mooroolbark <strong>baptist</strong> church&nbsp;<?php if ( is_front_page() ) : ?></h1><?php else: ?></span><?php endif; ?></a>
</div>