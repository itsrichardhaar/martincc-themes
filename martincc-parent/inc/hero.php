<?php
if (!defined('ABSPATH')) exit;

function martincc_render_hero() {
  // Default based on template if no explicit selection
  $variant = function_exists('get_field') ? get_field('hero_variant') : null;

  if (!$variant) {
    if (is_front_page()) $variant = 'home';
    else $variant = 'standard';
  }

  if ($variant === 'none') return;

  $allowed = ['standard','image','landing','home'];
  if (!in_array($variant, $allowed, true)) $variant = 'standard';

  get_template_part('template-parts/heroes/hero', $variant);
}