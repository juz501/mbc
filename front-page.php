<?php
get_header(); 
  ?><div class="drawbox"><?php
      $banner = get_field( 'banner_image' );
      ?><div class="banner" <?php 
        if ( $banner ) : 
          ?>style="background-image: url('<?php echo $banner['url']; ?>');"<?php 
        endif; 
      ?>><h2><?php the_field('banner_heading') ; ?></h2><a class="button" href="<?php the_field( 'banner_button_link' ); ?>"><?php
        the_field( 'banner_button_text' ); ?></a></div><?php
      ?><section class="wrap">
        <a class="anchor" id="service-times"></a><?php
          get_template_part( 'content-templates/content', 'frontpage' ); 
      ?></section><?php
  ?></div><?php
get_footer();