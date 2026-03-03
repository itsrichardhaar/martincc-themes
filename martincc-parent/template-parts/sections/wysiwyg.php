<?php
if (!defined('ABSPATH')) exit;

$content = function_exists('get_sub_field') ? get_sub_field('content') : '';
if (!$content) return;
?>

<section class="section section--wysiwyg" style="padding:40px 0;">
  <div class="container">
    <?php echo $content; ?>
  </div>
</section>