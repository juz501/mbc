<section>
  <div class="wrap">
    <div class="content-area-wrap">
      <?php 
        $heading = get_sub_field( 'content_heading' );
        if ( $heading ) : ?><h2 class="heading"><?php echo $heading; ?></h2><?php endif; 
      ?>
      <div class="content-area">
        <?php the_sub_field('content'); ?>
      </div>
    </div>
  </div>
</section>