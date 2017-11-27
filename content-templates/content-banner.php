<?php
    $use_video = get_field( 'use_video' );
    $banner = get_field( 'banner_image' ); 
  ?>
<div class="banner"
  <?php
    if ( ! $use_video && $banner && array_key_exists( 'url', $banner ) ) :
        ?> style="background-image: url('<?php echo $banner['url']; ?>');"<?php
    endif; 
  ?>
>
  <div class="cta">
    <?php
      $banner_heading = get_field( 'banner_heading' );
      $no_heading = false;
      if ( $banner_heading ) : 
    ?><h2><?php echo $banner_heading; ?></h2><?php 
      else:
        $no_heading = true;
      endif; 
    ?>
    <a class="button<?php if ( $no_heading ) : echo ' no-heading'; endif; ?>" href="<?php the_field( 'banner_button_link' ); ?>"><?php the_field( 'banner_button_text' ); ?></a>
  </div>
</div>