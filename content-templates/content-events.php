<?php
/**
 *  Content template for events
 */

?>
<section>
  <div class="wrap">
    <div class="events-wrap">
      <div class="events">
        <a class="anchor" id="<?php the_sub_field( 'events_anchor' ); ?>"></a>
        <?php
          $events_heading = get_sub_field( 'events_heading' );
        ?>
        <?php if ( $events_heading ) : ?>
          <h2 class="events-heading"><?php echo $events_heading; ?></h2>
        <?php endif; ?>
        <?php
        if ( have_rows( 'event_list' ) ) :
          while ( have_rows( 'event_list' ) ) :
            the_row();
            ?>
            <div class="event">
              <?php
                $event_date_time = get_sub_field( 'event_date_time' );
              ?>
              <div class="day"><?php echo date( 'l', $event_date_time ); ?></div>
              <span class="hour"><?php echo date( 'g', $event_date_time ); ?></span><!--
              --><span class="time-divider">:</span><!--
              --><span class="minutes"><?php echo date( 'i', $event_date_time ); ?></span><!--
              --><span class="ampm"><?php echo date( 'a', $event_date_time ); ?></span>
              <?php
              $has_second_time = get_sub_field( 'has_second_time' );
              if ( $has_second_time ) :
                $second_event_time = get_sub_field( 'second_time' );
                ?>
                &amp;
                <span class="hour"><?php echo date( 'g', $second_event_time ); ?></span><!--
                --><span class="time-divider">:</span><!--
                --><span class="minutes"><?php echo date( 'i', $second_event_time ); ?></span><!--
                --><span class="ampm"><?php echo date( 'a', $second_event_time ); ?></span>
              <?php endif; ?>
              <div class="date">
                <span class="day-of-month"><?php echo date( 'd', $event_date_time ); ?></span>
                <span class="month"><?php echo date( 'M', $event_date_time ); ?></span>
              </div>
              <span class="event-heading"><?php echo get_sub_field( 'event_heading' ); ?></span>
              <div class="description"><?php echo get_sub_field( 'event_description' ); ?></div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
