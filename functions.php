<?php

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );

$assets_path = get_stylesheet_directory() . '/dist';
$assets_uri = get_stylesheet_directory_uri() . '/dist';

$assets_version = (
  json_decode( file_get_contents( get_stylesheet_directory() . '/package.json') )->version
);

add_action( 'wp_enqueue_scripts', 'mbc_enqueue_scripts' );

if ( ! function_exists( 'mbc_enqueue_scripts' ) ) {
  function mbc_enqueue_scripts() {
    if ( ! is_admin() ) {
      global $assets_version, $assets_uri;
      wp_register_style( 'mbc-styles', $assets_uri . '/style.css', $assets_version, true );
      wp_enqueue_style( 'mbc-styles' );
      
      wp_register_script( 'mbc-scripts', $assets_uri . '/scripts.js', array( 'jquery' ), $assets_version, true );

      wp_enqueue_script( 'mbc-scripts' );
    }
  }
}

if ( function_exists( 'acf_add_options_page' ) ) {
  acf_add_options_page();
}
