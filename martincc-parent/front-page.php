<?php get_header(); ?>

<main class="site-main">
  <?php get_template_part('template-parts/layout/hero'); ?>

  <?php
    // Home sections (you can use the same 'page_sections' field on Home)
    martincc_render_sections('page_sections');

    if (!function_exists('have_rows') || !have_rows('page_sections')) :
  ?>
    <div class="container" style="padding:40px 0;">
      <?php while (have_posts()) : the_post(); the_content(); endwhile; ?>
    </div>
  <?php endif; ?>
</main>

<?php get_footer(); ?>