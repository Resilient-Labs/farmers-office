<footer>
  <?php if (is_front_page() ): ?>
    <?php get_template_part('templates/components/footer/footer-landing'); ?>
  <?php else: ?>
  
    <?php if ( !is_page_template('page-login.php') ): ?>
      <?php get_template_part('templates/components/footer/footer-enroll'); ?>
      <?php get_template_part('templates/components/footer/footer-books'); ?>
      <?php get_template_part('templates/components/footer/footer-footnote'); ?>
    <?php else: ?>
      <?php get_template_part('templates/components/footer/footer-footnote'); ?>
    <?php endif; ?>
  <?php endif; ?>
</footer>
