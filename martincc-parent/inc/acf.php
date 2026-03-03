<?php
if ( ! defined('ABSPATH') ) exit;

/**
 * ACF JSON sync (commit field groups to Git)
 */
add_filter('acf/settings/save_json', function ($path) {
  return get_template_directory() . '/acf';
});

add_filter('acf/settings/load_json', function ($paths) {
  $paths[] = get_template_directory() . '/acf';
  return $paths;
});

/**
 * Optional: Site Settings options page
 */
add_action('acf/init', function () {
  if ( function_exists('acf_add_options_page') ) {
    acf_add_options_page([
      'page_title' => 'Site Settings',
      'menu_title' => 'Site Settings',
      'menu_slug'  => 'site-settings',
      'capability' => 'edit_posts',
      'redirect'   => false,
    ]);
  }
});