<?php
/**
 * Created by PhpStorm.
 * User: starstryder
 * Date: 7/10/19
 * Time: 10:59 AM
 */



get_header();

?>

<div class="container">
    <div id="main" class="left">
        <div id="post">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h2 class="post-title"><?php the_title(); ?></h2>
                <?php the_content(); ?>

            <?php endwhile; else: ?>
                <?php _e('Sorry, no posts matched your criteria.'); ?>
            <?php endif; ?>
        </div><!--/post-->
    </div>

    <?php get_sidebar(); ?>
    <div style="clear:both"></div>
</div>

<?php
get_footer();