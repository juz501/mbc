<?php
/**
 * Index file which runs the content loop and includes header and footer
 */

get_header();
get_template_part( 'content-templates/content', 'loop' );
get_footer();
