<?php
if (!defined('ABSPATH')) exit;

$title    = function_exists('get_field') ? get_field('hero_landing_title') : '';
$subtitle = function_exists('get_field') ? get_field('hero_landing_subtitle') : '';
$cta1     = function_exists('get_field') ? get_field('hero_landing_cta_primary') : null;   // ACF link array
$cta2     = function_exists('get_field') ? get_field('hero_landing_cta_secondary') : null; // ACF link array

if (!$title) $title = get_the_title();
?>

<section class="hero hero--landing" style="padding:60px 0; border-bottom:1px solid #eee;">
  <div class="container">
    <h1 style="margin:0 0 12px;"><?php echo esc_html($title); ?></h1>

    <?php if ($subtitle) : ?>
      <p style="margin:0 0 18px; max-width:70ch;"><?php echo esc_html($subtitle); ?></p>
    <?php endif; ?>

    <div style="display:flex; gap:12px; flex-wrap:wrap;">
      <?php if (is_array($cta1) && !empty($cta1['url'])) : ?>
        <a href="<?php echo esc_url($cta1['url']); ?>" target="<?php echo esc_attr($cta1['target'] ?? '_self'); ?>">
          <?php echo esc_html($cta1['title'] ?: 'Learn more'); ?>
        </a>
      <?php endif; ?>

      <?php if (is_array($cta2) && !empty($cta2['url'])) : ?>
        <a href="<?php echo esc_url($cta2['url']); ?>" target="<?php echo esc_attr($cta2['target'] ?? '_self'); ?>">
          <?php echo esc_html($cta2['title'] ?: 'Contact'); ?>
        </a>
      <?php endif; ?>
    </div>
  </div>
</section>