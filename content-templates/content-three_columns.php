<?php
/**
 * Content template for three-coloumn layout
 */

$heading = get_sub_field( 'three_column_heading' );
?>
<section>
  <div class="wrap">
    <div class="three-columns-wrap">
      <?php if ( $heading ) : ?>
        <h2 class="heading"><?php echo $heading; ?></h2>
      <?php endif; ?>
      <div class="three-columns">
        <div class="column"><?php the_sub_field( 'first_column' ); ?></div>
        <div class="column"><?php the_sub_field( 'second_column' ); ?></div>
        <div class="column"><?php the_sub_field( 'third_column' ); ?></div>
      </div>
    </div>
  </div>
</section>
