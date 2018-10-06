<?php
/**
 * WordPress Init functions, hooks and filters
 */

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );

$assets_path = get_stylesheet_directory() . '/dist';
$assets_uri = get_stylesheet_directory_uri() . '/dist';

$packagejson_file = get_stylesheet_directory_uri() . '/package.json';
$assets_version = (
  json_decode( wp_remote_get( $packagejson_file )['body'] )->version
);
add_action( 'wp_enqueue_scripts', 'mbc_enqueue_scripts' );

if ( ! function_exists( 'mbc_enqueue_scripts' ) ) {
  function mbc_enqueue_scripts() {
    if ( ! is_admin() ) {
      global $assets_version, $assets_uri;
      $font_uri = 'https://fonts.googleapis.com/css?family=Poppins:400,400i,600,600i';
      wp_register_style( 'heading-font', $font_uri, array(), $asset_version );
      wp_register_style( 'mbc-styles', $assets_uri . '/style.css', array(), $assets_version );
      wp_enqueue_style( 'heading-font' );
      wp_enqueue_style( 'mbc-styles' );

      wp_register_script( 'mbc-scripts', $assets_uri . '/scripts.js',
        array( 'jquery' ), $assets_version, true );
      wp_enqueue_script( 'mbc-scripts' );
    }
  }
}

function cc_mime_types( $mimes ) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

if ( function_exists( 'acf_add_options_page' ) ) {
  acf_add_options_page();
}
