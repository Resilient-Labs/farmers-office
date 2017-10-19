<section class="footer-enroll">
    <?php if (get_field('enroll_title')) : ?>
        <h3>
            <?php the_field('enroll_title'); ?>
        </h3>
    <?php endif; ?>

    <?php if (get_field('enroll_text')) : ?>
        <p>
            <?php the_field('enroll_text'); ?>
        </p>
    <?php endif; ?>

    <?php if (get_field('enroll_link')) : ?>
        <a href="<?php the_field('enroll_link'); ?>">Enroll Now</a>
    <?php endif; ?>
</section>