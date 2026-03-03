<?php
if (!defined('ABSPATH')) exit;

$headline = function_exists('get_field') ? get_field('hero_home_headline') : '';
$topline  = function_exists('get_field') ? get_field('hero_home_topline') : '';

if (!$headline) $headline = get_bloginfo('name');
?>

<section class="hero hero--home" style="padding:80px 0; border-bottom:1px solid #eee;">
  <div class="container">
    <?php if ($topline) : ?>
      <p style="margin:0 0 10px;"><?php echo esc_html($topline); ?></p>
    <?php endif; ?>
    <h1 style="margin:0;"><?php echo esc_html($headline); ?></h1>
  </div>
</section>