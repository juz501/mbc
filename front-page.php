<?php get_header(); ?>
<div class="drawbox">
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
      <h2><?php the_field('banner_heading') ; ?></h2>
      <a class="button" href="<?php the_field( 'banner_button_link' ); ?>"><?php the_field( 'banner_button_text' ); ?></a>
    </div>
  </div>
  <?php get_template_part( 'content-templates/content', 'services' ); ?>
</div>
<?php get_footer();