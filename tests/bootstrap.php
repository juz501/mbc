<?php
/**
 * Bootstraps a test environment for PHPUnit.
 */

// Short-circuit if included in a web request.
if ( isset( $_SERVER['HTTP_HOST'] ) || 'testing' !== getenv( 'APP_ENV' ) ) { // phpcs:disable
  die( 'Error: not in a suitable environment to run tests.' );
}
