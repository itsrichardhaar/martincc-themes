<?php
if ( ! defined('ABSPATH') ) exit;

add_action('wp_enqueue_scripts', function () {
  $ver = wp_get_theme()->get('Version');

  wp_enqueue_style(
    'martincc-main',
    get_template_directory_uri() . '/assets/css/main.css',
    [],
    $ver
  );

  wp_enqueue_script(
    'martincc-main',
    get_template_directory_uri() . '/assets/js/main.js',
    [],
    $ver,
    true
  );
});