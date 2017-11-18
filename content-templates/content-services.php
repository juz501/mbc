<section>
<div class="wrap">
  <div class="service-times-wrap">
    <div class="service-times">
      <a class="anchor" id="service-times"></a>
      <?php 
        if ( have_rows( 'service_time_list' ) ) :
          while ( have_rows( 'service_time_list') ) : 
            the_row();
            ?><div class="service-time"><?php
            $select_date = get_sub_field( 'select_date' );
              if ( $select_date ) :
                $service_date = get_sub_field( 'date' );
                ?><h3 class="day"><?php echo date( 'l', $service_date ); ?></h3><?php
              else :
                ?><h3 class="day"><?php echo get_sub_field( 'day' )['label']; ?></h3><?php
              endif;
              ?><span class="hour"><?php echo get_sub_field( 'hour' ); ?></span><?php
              ?><span class="time-divider">:</span><?php
              ?><span class="minutes"><?php echo str_pad( get_sub_field( 'minutes' ), 2, '0' ); ?></span><?php
              ?><span class="ampm"><?php echo get_sub_field( 'am_pm' ); ?></span><?php
              
              if ( $select_date && $service_date ) :
                ?><div class="date">
                  <span class="day-of-month"><?php echo date( 'd', $service_date ); ?></span>
                  <span class="month"><?php echo date( 'M', $service_date ); ?></span>
                </div><?php
              endif;
              ?><div class="description"><?php echo get_sub_field( 'description' ); ?></div><?php
            ?></div><?php
          endwhile;
        endif;
      ?>
    </div>
  </div>
</div>
</section>