<?php get_header(); ?>

<main class="site-main site-main--home">

  <?php
  // Full-width hero (hero templates can use container internally if desired)
  get_template_part('template-parts/heros/hero-home');
  ?>

  <?php
  // Flexible sections (each section controls its own width)
  if (function_exists('have_rows') && have_rows('page_sections')) :
    martincc_render_sections('page_sections');
  else :
    // Full-width fallback wrapper with a contained inner
    echo '<section class="section section--fallback" style="padding:40px 0;">';
    echo '<div class="container">';
    while (have_posts()) : the_post();
      the_content();
    endwhile;
    echo '</div>';
    echo '</section>';
  endif;
  ?>

</main>

<?php get_footer(); ?>