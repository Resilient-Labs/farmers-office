<section class="help-banner">
    <?php if (get_field('help_banner_headline')) : ?>
        <h2><?php the_field('help_banner_headline'); ?></h2>
    <?php else : ?>
        <h2>Need more help?</h2>
    <?php endif; ?>   

    <?php if (get_field('help_banner_text')) : ?>
        <p><?php the_field('help_banner_text'); ?> </p>
    <?php else : ?>
    <p>
        Whether you’re just starting out, or expanding your business to the next phase of growth these resources will get you on the right track in managing your farm. Looking for more help?
    </p>
    <?php endif; ?> 

    <?php if (get_field('help_banner_link')) : ?>
        <a href="<?php the_field('help_banner_link'); ?>">
            Get Started with the Farmer’s Office
            </a>
    <?php else : ?>
        <a href="#">Get Started with the Farmer’s Office</a>
    <?php endif; ?> 

    <?php if (get_field('help_banner_image')) : ?>
        <img src="<?php the_field('help_banner_image')?>" />
    <?php else : ?>
        <img src="<?= get_template_directory_uri(); ?>/dist/images/help_banner.jpg" />
    <?php endif; ?>
</section>
