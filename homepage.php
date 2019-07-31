<?php
/* Template Name: Homepage */

get_header();

?>

    <div class="container">
        <div id="full-width" class="left">
            <div id="post">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>

                <?php endwhile; else: ?>
                    <?php _e('Sorry, no posts matched your criteria.'); ?>
                <?php endif; ?>
            </div><!--/post-->
        </div>

        <div style="clear:both"></div>
    </div>

<?php
get_footer();
