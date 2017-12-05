<section class="no-margin-bottom">
  <div class="directions-wrap">
    <span class="address"><a href="https://www.google.com/maps/search/?api=1&query=<?php echo urlencode( get_field( 'address', 'options' ) ); ?>" target="_blank"><?php the_field( 'address', 'options' ); ?></a></span>
    <a class="button" target="_blank" href="https://www.google.com/maps/dir/?api=1&destination=<?php 
      echo urlencode( get_field( 'address', 'options' ) ); 
      ?>"><?php 
      $location_icon = get_field( 'location_icon', 'options' ); 
      if ( $location_icon ) : 
        echo '<span class="location_icon">' . file_get_contents( $location_icon['url'] ) . '</span> '; 
      endif; 
    ?>Directions</a>
  </div>
</section>