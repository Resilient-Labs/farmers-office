<section class="landing-video">
    <?php // inspect this to see what element it renders as ?>
    <?php if (get_field('video')) : ?>
        <?php the_field('video'); ?>
    <?php endif; ?>

    <ul>
        <?php if( have_rows('description') ): ?>
            <?php while( have_rows('description') ): ?>
                <?php if (get_sub_field('bullet_point')): ?>
                    <li>
                        <?php the_sub_field('bullet_point'); ?>
                    </li>
                <?php endif; ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </ul> 

    <?php if (get_field('brochure')) : ?>
        <a href="<?php the_field('brochure'); ?>" download>Download Brochure</a>
    <?php endif; ?>
</section>