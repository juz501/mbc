<?php

if ( have_posts() ) :
  while ( have_posts() ) : the_post();
    ?><div class="wrap"><h1><?php the_title(); ?></h1></div><?php
    ?><div class="wrap"><?php the_content(); ?></div><?php
    get_template_part( 'content-templates/content', 'flexible' );
  endwhile;
else:
  ?><div class="wrap"><h1>Page Not Found</h1></div><?php
  get_template_part( 'content-templates/content', '404' );
endif;