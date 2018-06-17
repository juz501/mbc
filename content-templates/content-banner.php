<?php
    $use_video = get_field( 'use_video' );
    $banner = get_field( 'banner_image' ); 
    $banner_tablet = get_field( 'banner_image_tablet' );
    if ( ! $banner_tablet ) : 
      $banner_tablet = $banner;
    endif; 
    $banner_mobile = get_field( 'banner_image_mobile' );
    if ( ! $banner_mobile ) : 
      $banner_mobile = $banner;
    endif; 
  ?>
<section class="top-section">
  <style>
    .home .top-section {
      height: 700px;
    }
    .home .banner {
      background-image: url('<?php echo $banner_mobile["url"]; ?>');
      background-size: contain;
    }
    @media screen and (min-width: 600px) {
      .home .top-section {
        height: 700px;
      }
      .home .banner {
        background-image: url('<?php echo $banner_tablet["url"]; ?>');
        background-size: contain;
      }
    }
    @media screen and (min-width: 1280px) {
      .home .top-section {
        height: 700px;
      }
      .home .banner {
        background-image: url('<?php echo $banner["url"]; ?>');
        background-size: cover;
      }
    }
  </style>
  <div class="banner"></div>
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