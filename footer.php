<?php
/**
 * Footer for each page
 */

$phone = get_field( 'phone', 'options' );
$phone_tel_link = 'tel:' . get_field( 'phone_tel_link', 'options' );
$email = get_field( 'email', 'options' );
$email_link = 'mailto:' . $email;
$address = get_field( 'address', 'options' );
$gmap_link = 'https://www.google.com/maps/search/?api=1&query=' . rawurlencode( $address );

?>    </div><!-- .site-content -->
      <footer>
        <div class="wrap">
          <ul class="contact-details">
            <li><a href="<?php echo $phone_tel_link; ?>"><?php echo $phone; ?></a></li>
            <li><a href="<?php echo $email_link; ?>"><?php echo $email; ?></a></li>
            <li><a href="<?php echo $gmap_link; ?>" target="_blank"><?php echo $address; ?></a></li>
          </ul>
        </div><!-- .wrap -->
      </footer><!-- footer -->
    </div><!-- #page -->
    <?php wp_footer(); ?>
  </body>
</html>
<?php
