
            </div><!-- .site-content -->
            <footer>
                <div class="wrap">
                    <ul class="contact-details">
                        <li><a href="tel:<?php the_field( 'phone_tel_link', 'options' ); ?>"><?php the_field( 'phone', 'options' ); ?></a></li>
                        <li><a href="mailto:<?php the_field( 'email', 'options' ); ?>"><?php the_field('email', 'options' ); ?></a></li>
                        <li><?php the_field( 'address', 'options' ); ?></li>
                    </ul>
                </div><!-- .wrap -->
            </footer><!-- footer -->
        </div><!-- #page -->
        <?php wp_footer(); ?>
    </body>
</html>