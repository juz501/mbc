<section class="no-margin-top">
  <div class="photo-boxes-wrap">
    <div class="photo-boxes">
      <a class="anchor" id="<?php the_sub_field('photo_boxes_anchor'); ?>"></a>
      <?php 
        if ( have_rows( 'photo_boxes' ) ) :
          while ( have_rows( 'photo_boxes') ) :
            the_row();
            $is_external = get_sub_field( 'is_external' );
            $link = get_sub_field( 'link' );
            if ( $link ) :
            ?><a class="photo-link" href="<?php echo $link['url']; ?>"<?php if ( $link['target'] ) : ?> target="<?php echo $link['target']; ?>"<?php endif; ?>><?php
              $photo = get_sub_field( 'photo' );
              if ( $photo ) :
                ?><div class="photo" style="background-image: url(<?php echo get_sub_field( 'photo' )['url'] ;?>);"></div><?php
              endif;
              ?><div class="shader"><div class="photo-label h2<?php if ( get_sub_field( 'dark-label' )): ?> dark<?php endif; ?>"><?php echo $link['title']; ?></div></div><?php
            ?></a><?php
            endif;
          endwhile;
        endif;
      ?>
    </div>
  </div>
</section>