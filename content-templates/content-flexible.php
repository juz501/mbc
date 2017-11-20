<?php

if ( have_rows( 'page_content' ) ) :
  while ( have_rows( 'page_content' ) ) : the_row();
    switch ( get_row_layout() ) :
    case 'services' :
      get_template_part( 'content-templates/content', 'services' );
      break;
    case 'directions' :
      get_template_part( 'content-templates/content', 'directions' );
      break;
    case 'events' :
      get_template_part( 'content-templates/content', 'events' );
      break;
    default:
      break;
    endswitch;
  endwhile;
endif;