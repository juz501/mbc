<?php
    $use_video = get_field( 'use_video' );
    $banner = get_field( 'banner_image' ); 
  ?>
<section class="top-section">
  <div class="banner"
    <?php
      if ( ! $use_video && $banner && array_key_exists( 'url', $banner ) ) :
          ?> style="background-image: url('<?php echo $banner['url']; ?>');"<?php
      endif; 
    ?>
  ></div>
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
    <div class="cta-buttons<?php if ( $no_heading ) : echo ' no-heading'; endif; ?>"><?php
      if ( have_rows( 'banner_button_list' ) ) :
        while ( have_rows( 'banner_button_list' ) ) : the_row();
          $link = get_sub_field( 'banner_button_link' );
          ?><a class="button" href="<?php echo $link['url'] ?>"<?php if ($link['target']) : echo ' target="' . $link['target'] . '"'; endif; ?>><?php echo $link['title']; ?></a><?php
        endwhile;
      endif;
      ?>
    </div>
  </div>
</section>