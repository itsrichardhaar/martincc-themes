<?php
if ( ! defined('ABSPATH') ) exit;

/**
 * HERO ROUTER
 * Uses ACF field: hero_variant
 * Allowed: standard | image | landing | home | none
 */
function martincc_render_hero() {
  $variant = function_exists('get_field') ? get_field('hero_variant') : '';

  if ( ! $variant ) {
    $variant = is_front_page() ? 'home' : 'standard';
  }

  if ( $variant === 'none' ) return;

  $allowed = ['standard','image','landing','home'];
  if ( ! in_array($variant, $allowed, true) ) $variant = 'standard';

  get_template_part('template-parts/heroes/hero', $variant);
}

/**
 * SECTIONS ROUTER
 * Flexible content field: page_sections
 * Each layout name must match a file in template-parts/sections/
 */
function martincc_render_sections($field_name = 'page_sections') {
  if ( ! function_exists('have_rows') ) return;

  if ( have_rows($field_name) ) {
    while ( have_rows($field_name) ) {
      the_row();
      $layout = get_row_layout();
      if ( $layout ) {
        get_template_part('template-parts/sections/' . $layout);
      }
    }
  }
}