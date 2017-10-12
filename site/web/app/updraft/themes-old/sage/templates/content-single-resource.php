<div class="resource">
    <?php if ( get_the_title() ) : ?>
        <h2 class="resource-title">
            <?php the_title(); ?>
        </h2>
    <?php endif; ?>
    
    <?php if (get_the_category() ) : ?>
        <span class="resource-category">
            <?php the_category(); ?>
        </span>
    <?php endif; ?>

    <?php if ( get_the_content() ) : ?>
        <div class="resource-content">
            <?php the_content(); ?>
        </div>
    <?php endif; ?>
</div>