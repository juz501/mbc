<?php
/**
 * Template to show google directions
 */

?>
<section class="no-margin-bottom">
  <div class="directions-wrap">
    <?php
      $googlemap_link = 'https://www.google.com/maps/search/?api=1&query=' .
        // phpcs:disable
        urlencode( get_field( 'address', 'options' ) ) // phpcs:disable
        // phpcs:enable
    ?>
    <span class="address"><a href="<?php echo $googlemap_link; ?>"
      target="_blank"><?php the_field( 'address', 'options' ); ?></a></span>
    <?php
      $googlemap_directions = 'https://www.google.com/maps/dir/?api=1&destination=' .
        // phpcs:disable
        urlencode( get_field( 'address', 'options' ) );
        // phpcs:enable
    ?>
    <a class="button" target="_blank" href="<?php echo $googlemap_directions; ?>">
    <?php $location_icon = get_field( 'location_icon', 'options' ); ?>
    <?php if ( $location_icon ) : ?>
        <span class="location_icon"><?php wp_remote_get( $location_icon['url'] )['body']; ?></span> 
    <?php endif; ?>Directions</a>
  </div>
</section>
