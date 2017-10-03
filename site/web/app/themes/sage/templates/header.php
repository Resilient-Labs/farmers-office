<header>
  <?php get_template_part('templates/navigation/navigation-drawer'); ?>
  <a href="">
    <button>
      Enroll Now
    </button>
  </a>
  <a href="">
    Login
  </a>
  <?php // on the landing page, display the primary banner ?>
  <?php if ( is_page_template('front-page.php') ): ?>
    <img src="<?= get_template_directory_uri(); ?>/dist/images/header-primary-fo-banner.jpg" />
  <?php // on every other page, display the secondary banner ?>
  <?php else: ?>
    <img src="<?= get_template_directory_uri(); ?>/dist/images/header-secondary-fo-banner.jpg" />
  <?php endif; ?>
</header>
