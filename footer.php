<?php
/**
 * Created by PhpStorm.
 * User: starstryder
 * Date: 7/10/19
 * Time: 12:51 PM
 */
?>

<div id="footer">
    <div class="container">
        <div class="left" style="width: 20%;">
            <?php dynamic_sidebar( 'footer_left' ); ?>
            <div id="footer-menu"><?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?></div>
        </div>

        <div class="middle" style="width: 38%">
            <?php dynamic_sidebar( 'footer_middle' ); ?>
        </div>
        <div class="right" style="width:38%;">
            <?php dynamic_sidebar( 'footer_right' ); ?>
        </div>
    </div>
    <div style="clear: both;"></div>
</div>

<?php
/* Always have wp_footer() just before the closing </body>
 * tag of your theme, or you will break many plugins, which
 * generally use this hook to reference JavaScript files.
 */
wp_footer();
?>
</body>
</html>
