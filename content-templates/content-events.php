<section>
  <div class="wrap">
    <div class="events-wrap">
      <div class="events">
        <a class="anchor" id="<?php the_sub_field('events_anchor'); ?>"></a>
        <?php 
          $events_heading = get_sub_field('events_heading');
          if ( $events_heading ) :
            ?><h2 class="events-heading"><?php echo $events_heading; ?></h2><?php
          endif;
          if ( have_rows( 'event_list' ) ) :
            while ( have_rows( 'event_list') ) : 
              the_row();
              ?><div class="event"><?php
                $event_date_time = get_sub_field( 'event_date_time' );
                ?><div class="day"><?php echo date( 'l', $event_date_time ); ?></div><?php
                ?><span class="hour"><?php echo date( 'g', $event_date_time ); ?></span><?php
                ?><span class="time-divider">:</span><?php
                ?><span class="minutes"><?php echo date( 'i', $event_date_time ); ?></span><?php
                ?><span class="ampm"><?php echo date( 'a', $event_date_time ); ?></span><?php
                ?><div class="date">
                  <span class="day-of-month"><?php echo date( 'd', $event_date_time ); ?></span>
                  <span class="month"><?php echo date( 'M', $event_date_time ); ?></span>
                </div><?php
                ?><span class="event-heading"><?php echo get_sub_field( 'event_heading' ); ?></span><?php
                ?><div class="description"><?php echo get_sub_field( 'event_description' ); ?></div><?php
              ?></div><?php
            endwhile;
          endif;
        ?>
      </div>
    </div>
  </div>
</section>