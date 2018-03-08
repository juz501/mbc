<section>
  <div class="wrap">
    <div class="service-times-wrap">
      <?php
        $services_count = count( get_sub_field('service_time_list'));
      ?>
      <div class="service-times col-<?php echo $services_count; ?>">
        <a class="anchor" id="<?php the_sub_field('services_anchor'); ?>"></a>
        <?php
          $services_heading = get_sub_field('services_heading'); 
          if ( $services_heading ) :
            ?><h2 class="service-times-heading"><?php echo $services_heading;  ?></h2><?php
          endif;
          if ( have_rows( 'service_time_list' ) ) :
            while ( have_rows( 'service_time_list') ) : 
              the_row();
              ?><div class="service-time"><?php
              $select_date = get_sub_field( 'select_date' );
                if ( $select_date ) :
                  $service_date = get_sub_field( 'date' );
                  ?><div class="day"><?php echo date( 'l', $service_date ); ?></div><?php
                else :
                  ?><div class="day"><?php echo get_sub_field( 'day' )['label']; ?></div><?php
                endif;
                $service_time = get_sub_field( 'time' );
                ?><span class="hour"><?php echo date( 'g', $service_time ); ?></span><?php
                ?><span class="time-divider">:</span><?php
                ?><span class="minutes"><?php echo date( 'i', $service_time ); ?></span><?php
                ?><span class="ampm"><?php echo date( 'a', $service_time ); ?></span><?php
                $has_second_time = get_sub_field( 'has_second_time' );
                if ( $has_second_time ) :
                  $second_service_time = get_sub_field( 'second_time' );
                  ?> &amp; <?
                  ?><span class="hour"><?php echo date( 'g', $second_service_time ); ?></span><?php
                  ?><span class="time-divider">:</span><?php
                  ?><span class="minutes"><?php echo date( 'i', $second_service_time ); ?></span><?php
                  ?><span class="ampm"><?php echo date( 'a', $second_service_time ); ?></span><?php
                endif;
                if ( $select_date && $service_date ) :
                  ?><div class="date">
                    <span class="day-of-month"><?php echo date( 'd', $service_date ); ?></span>
                    <span class="month"><?php echo date( 'M', $service_date ); ?></span>
                  </div><?php
                endif;
                ?><span class="heading"><?php echo get_sub_field('heading');?></span><?php
                ?><div class="description"><?php echo get_sub_field( 'description' ); ?></div><?php
              ?></div><?php
            endwhile;
          endif;
        ?>
      </div>
    </div>
  </div>
</section>