<?php get_header(); ?>
<div class="drawbox">
  <?php
    $use_video = get_field( 'use_video' );
    $banner = get_field( 'banner_image' ); 
  ?>
  <div class="banner"
    <?php 
      if ( ! $use_video && $banner ) :
          ?> style="background-image: url('<?php echo $banner['url']; ?>');"<?php
      endif; 
    ?>
  >
    <div class="cta">
      <h2><?php the_field('banner_heading') ; ?></h2>
      <a class="button" href="<?php the_field( 'banner_button_link' ); ?>"><?php the_field( 'banner_button_text' ); ?></a>
    </div>
  </div>
  <section class="wrap service-times">
    <a class="anchor" id="service-times"></a>
    <?php the_field( 'service_time_section' ); ?>
  </section>
</div>
<?php get_footer();