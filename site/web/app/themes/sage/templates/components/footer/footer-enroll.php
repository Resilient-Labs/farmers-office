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

    <div class="box"></div>

    <?php if (get_field('enroll_link')) : ?>
        <a class="enrollTxt" href="<?php the_field('enroll_link'); ?>">Enroll Now</a>
    <?php endif; ?>
</section>