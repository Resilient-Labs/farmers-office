<?php 
/**
* Template Name: Resoures Main
*/
?>
<section class="resources">
    <?php 
    // Query for only the Resources
    $arguments = array('post_type'=>'resource');
    $resources_query = new WP_Query($arguments);
    ?>
    <?php if($resources_query->have_posts()) : ?>
        <?php while($resources_query->have_posts()) :  ?>
            <?php $resources_query->the_post(); ?>
                <?php get_template_part('templates/components/resource-card'); ?>
            <?php endwhile; ?>
    <?php endif; ?>
</section>