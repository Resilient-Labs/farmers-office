<section class="footer-books">
    <?php if( have_rows('book') ): ?>
        <?php while( have_rows('book') ): the_row(); ?>
            <div class="footer-book">
                <?php if (get_sub_field('book_title')) : ?>
                    <h3 class="title">
                        <?php the_sub_field('book_title'); ?>
                    </h3>
                <?php endif; ?>

                <?php if (get_sub_field('book_author')) : ?>
                    <small class="author">
                        <?php the_sub_field('book_author'); ?>
                    </small>
                <?php endif; ?>
                <?php if (get_sub_field('book_image')) : ?>
                    <img class="img" src="<?php the_sub_field('book_image'); ?>" />
                <?php endif; ?>

                <?php if (get_sub_field('book_description')) : ?>
                    <p class="descrip">
                        <?php the_sub_field('book_description'); ?>
                    </p>
                <?php endif; ?>

                <?php if (get_sub_field('book_link')) : ?>
                    <a class="link" href="<?php the_sub_field('book_link'); ?>">
                        Buy Now
                    </a>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</section>