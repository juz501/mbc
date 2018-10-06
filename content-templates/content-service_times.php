<?php
/**
 * Content template for services layout
 */

$services_heading = get_sub_field( 'services_heading' );
?>
<section>
  <div class="wrap">
    <?php if ( $services_heading ) : ?>
      <h2 class="service-times-heading"><?php echo $services_heading; ?></h2>
    <?php endif; ?>
    <div class="service-times-wrap">
      <?php $services_count = count( get_sub_field( 'service_time_list' ) ); ?>
      <div class="service-times col-<?php echo $services_count; ?>">
        <a class="anchor" id="<?php the_sub_field( 'services_anchor' ); ?>"></a>
        <?php if ( have_rows( 'service_time_list' ) ) : ?>
          <?php while ( have_rows( 'service_time_list' ) ) : ?>
            <?php the_row(); ?>
            <div class="service-time">
              <?php $select_date = get_sub_field( 'select_date' ); ?>
              <?php if ( $select_date ) : ?>
                <?php $service_date = get_sub_field( 'date' ); ?>
                <div class="day"><?php echo date( 'l', $service_date ); ?></div>
              <?php else : ?>
                <div class="day"><?php echo get_sub_field( 'day' )['label']; ?></div>
              <?php endif; ?>
              <?php $service_time = get_sub_field( 'time' ); ?>
              <span class="hour"><?php echo date( 'g', $service_time ); ?></span><!--
              --><span class="time-divider">:</span><!--
              --><span class="minutes"><?php echo date( 'i', $service_time ); ?></span><!--
              --><span class="ampm"><?php echo date( 'a', $service_time ); ?></span><!--
              --><?php $has_second_time = get_sub_field( 'has_second_time' ); ?>
              <?php if ( $has_second_time ) : ?>
                <?php $second_service_time = get_sub_field( 'second_time' ); ?>
                &amp;
                <span class="hour"><?php echo date( 'g', $second_service_time ); ?></span><!--
                --><span class="time-divider">:</span><!--
                --><span class="minutes"><?php echo date( 'i', $second_service_time ); ?></span><!--
                --><span class="ampm"><?php echo date( 'a', $second_service_time ); ?></span>
              <?php endif; ?>
              <?php if ( $select_date && $service_date ) : ?>
                <div class="date">
                  <span class="day-of-month"><?php echo date( 'd', $service_date ); ?></span><!--
                  --><span class="month"><?php echo date( 'M', $service_date ); ?></span>
                </div>
              <?php endif; ?>
              <span class="heading"><?php echo get_sub_field( 'heading' ); ?></span>
              <div class="description"><?php echo get_sub_field( 'description' ); ?></div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
