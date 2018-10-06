<?php
/**
 * Homepage tempalte with banner and flexible content
 */

get_header();
get_template_part( 'content-templates/content', 'banner' );
get_template_part( 'content-templates/content', 'flexible' );
get_footer();
