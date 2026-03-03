<?php
if (!defined('ABSPATH')) exit;

$title = function_exists('get_field') ? get_field('hero_standard_title') : '';
$intro = function_exists('get_field') ? get_field('hero_standard_intro') : '';

if (!$title) $title = get_the_title();
?>

<section class="hero hero--standard" style="padding:40px 0; border-bottom:1px solid #eee;">
  <div class="container">
    <h1 style="margin:0 0 10px;"><?php echo esc_html($title); ?></h1>
    <?php if ($intro) : ?>
      <p style="margin:0; max-width:70ch;"><?php echo esc_html($intro); ?></p>
    <?php endif; ?>
  </div>
</section>