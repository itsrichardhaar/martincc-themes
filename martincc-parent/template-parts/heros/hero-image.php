<?php
if (!defined('ABSPATH')) exit;

$title   = function_exists('get_field') ? get_field('hero_image_title') : '';
$intro   = function_exists('get_field') ? get_field('hero_image_intro') : '';
$bg      = function_exists('get_field') ? get_field('hero_image_bg') : null; // ACF image array or URL depending on setting
$overlay = function_exists('get_field') ? get_field('hero_image_overlay_opacity') : 0.35;

if (!$title) $title = get_the_title();

$bg_url = '';
if (is_array($bg) && !empty($bg['url'])) $bg_url = $bg['url'];
elseif (is_string($bg)) $bg_url = $bg;
?>

<section class="hero hero--image" style="position:relative; padding:80px 0; color:#fff; overflow:hidden;">
  <?php if ($bg_url) : ?>
    <div aria-hidden="true" style="position:absolute; inset:0; background:url('<?php echo esc_url($bg_url); ?>') center/cover no-repeat;"></div>
  <?php endif; ?>
  <div aria-hidden="true" style="position:absolute; inset:0; background:rgba(0,0,0,<?php echo esc_attr($overlay); ?>);"></div>

  <div class="container" style="position:relative;">
    <h1 style="margin:0 0 10px;"><?php echo esc_html($title); ?></h1>
    <?php if ($intro) : ?>
      <p style="margin:0; max-width:70ch;"><?php echo esc_html($intro); ?></p>
    <?php endif; ?>
  </div>
</section>