
            </div><!-- .site-content -->
            <footer>
                <div class="wrap">
                    <ul class="contact-details">
                        <li><a href="tel:<?php the_field( 'phone_tel_link', 'options' ); ?>"><?php the_field( 'phone', 'options' ); ?></a></li>
                        <li><a href="mailto:<?php the_field( 'email', 'options' ); ?>"><?php the_field('email', 'options' ); ?></a></li>
                        <li><a href="https://www.google.com/maps/search/?api=1&query=<?php echo urlencode( get_field( 'address', 'options' ) ); ?>" target="_blank"><?php the_field( 'address', 'options' ); ?></a></li>
                    </ul>
                </div><!-- .wrap -->
            </footer><!-- footer -->
        </div><!-- #page -->
        <?php wp_footer(); ?>
    </body>
</html>