<?php get_header(); ?>

<main class="site-main">
  <?php get_template_part('template-parts/layout/hero'); ?>

  <div class="container" style="padding:40px 0;">
    <?php while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; ?>
  </div>
</main>

<?php get_footer(); ?>