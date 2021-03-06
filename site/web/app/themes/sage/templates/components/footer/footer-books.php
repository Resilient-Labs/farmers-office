<section class="footer-books">
    <?php if( have_rows('book') ): ?>
        <?php while( have_rows('book') ): the_row(); ?>
            <div class="footer-book">
                <?php if (get_sub_field('book_title')) : ?>
                    <h3>
                        <?php the_sub_field('book_title'); ?>
                    </h3>
                <?php endif; ?>

                <?php if (get_sub_field('book_author')) : ?>
                    <small>
                        <?php the_sub_field('book_author'); ?>
                    </small>
                <?php endif; ?>

                <?php if (get_sub_field('book_description')) : ?>
                    <p>
                        <?php the_sub_field('book_description'); ?>
                    </p>
                <?php endif; ?>

                <?php if (get_sub_field('book_link')) : ?>
                    <a href="<?php the_sub_field('book_link'); ?>">
                        Buy Now
                    </a>
                <?php endif; ?>

                <?php if (get_sub_field('book_image')) : ?>
                    <img src="<?php the_sub_field('book_image'); ?>" />
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>