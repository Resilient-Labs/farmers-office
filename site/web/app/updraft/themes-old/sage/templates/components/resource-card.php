<div class="resource-card">
    <?php if (get_the_category() ) : ?>
        <span class="resource-category">
            <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?>
        </span>
    <?php endif; ?>
    <?php if ( get_the_title() ) : ?>
        <h2 class="resource-title">
            <?php the_title(); ?>
        </h2>
    <?php endif; ?>
    <?php if ( get_the_content() ) : ?>
        <div class="resource-content">
            <?php $trimmed_content = wp_trim_words( get_the_content(), $num_words = 32, $more = ' ...' );?>
            <?php echo $trimmed_content; ?>
        </div>
    <?php endif; ?>
    <a href="<?php the_permalink(); ?>">See Resource</a>
</div>