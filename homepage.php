<?php
/* Template Name: Homepage */

get_header();

?>

    <div class="container">
        <div id="main" class="left">
            <div id="post">
                <table style="margin-bottom: 30px;">
                    <tr>
                        <td style="height: 150px; width: 450px;" colspan="3">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/TREX/Theme1.jpg"
                                 style="height: 150px; width: 450px;">
                        </td>
                        <td style="height: 396px; width: 150px;" rowspan="3">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/TREX/Theme2.jpg"
                                 style="height: 396px; width: 150px;">
                        </td>
                    </tr>
                    <tr>
                        <td style="height: 396px; width: 150px;" rowspan="3" >
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/TREX/Theme3.jpg"
                                 style="height: 396px; width: 150px;">
                        </td>
                        <td style="background-color: blue;  height: 246px; width: 300px;" colspan="2" rowspan="2">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/TREX/fp_TREX_logo.png"
                             style="height: 246px; width: 300px;">
                        </td>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                        <td style="height: 150px; width: 450px;" colspan="3">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/TREX/Theme4.jpg"
                                 style="height: 150px; width: 450px;">
                        </td>
                    </tr>
                </table>


            </div><!--/post-->
        </div>
        <?php get_sidebar(); ?>
        <div style="clear:both"></div>
        <div id="full-width" class="left">
            <div id="post">
                <h3>Read about our recent activities</h3>
                <?php query_posts('posts_per_page=3');
                if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="home-posts">
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        <?php the_excerpt(); ?>
                    </div>


                <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
        <div style="clear:both"></div>
    </div>

<?php
get_footer();
