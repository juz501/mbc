<?php
/**
 * Flexible content template switch
 */

if ( have_rows( 'page_content' ) ) :
  while ( have_rows( 'page_content' ) ) :
    the_row();
    switch ( get_row_layout() ) :
      case 'photo_boxes':
        get_template_part( 'content-templates/content', 'photo_boxes' );
        break;
      case 'services':
        get_template_part( 'content-templates/content', 'service_times' );
        break;
      case 'directions':
        get_template_part( 'content-templates/content', 'directions' );
        break;
      case 'events':
        get_template_part( 'content-templates/content', 'events' );
        break;
      case 'content_area':
        get_template_part( 'content-templates/content', 'content_area' );
        break;
      case 'two_columns':
        get_template_part( 'content-templates/content', 'two_columns' );
        break;
      case 'three_columns':
        get_template_part( 'content-templates/content', 'three_columns' );
        break;
      default:
        break;
    endswitch;
  endwhile;
endif;
