<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/components/landing/landing-welcome'); ?>
  <?php get_template_part('templates/components/landing/landing-video'); ?>
  <?php get_template_part('templates/components/testimonials/testimonial-dorothy'); ?>
  <?php get_template_part('templates/components/landing/landing-key-outcomes'); ?>
  <?php get_template_part('templates/components/testimonials/testimonial-brett'); ?>
  <?php get_template_part('templates/components/landing/landing-pricing'); ?>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>