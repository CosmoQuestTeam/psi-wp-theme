<?php
/**
 * Created by PhpStorm.
 * User: starstryder
 * Date: 7/10/19
 * Time: 11:04 AM
 */


if (! function_exists('psiwptheme_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which runs
     * before the init hook. The init hook is too late for some features, such as indicating
     * support post thumbnails.
     */
    function psiwptheme_setup(){
        load_theme_textdomain( 'psi-wp-psi' , get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 150, 150);



        // This theme uses wp_nav_menu() in 3 locations.
        register_nav_menus(
            array(
                'top-menu' => __('Top Menu'),
                'header-menu' => __('Header Menu'),
                'footer-menu' => __('Footer Menu')
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            )
        );



        add_theme_support(
            'custom-logo',
            array(
                'height' => 100,
                'width' => 400,
                'flex-height' => true,
                'flex-width' => true,
                'header-text' => array('site-title', 'site-description'),
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        // Add support for Block Styles.
        add_theme_support( 'wp-block-styles' );

        // Add support for full and wide align images.
        add_theme_support( 'align-wide' );

        // Add support for editor styles.
        add_theme_support( 'editor-styles' );

        // Enqueue editor styles.
        add_editor_style( 'style-editor.css' );

        // Add support for responsive embedded content.
        add_theme_support( 'responsive-embeds' );
    }
endif;
add_action( 'after_setup_theme', 'psiwptheme_setup' );

/** Add shortcode support to everything */

add_filter('widget_text', 'shortcode_unautop');
add_filter('widget_text', 'do_shortcode');
add_filter('the_excerpt', 'shortcode_unautop');
add_filter('the_excerpt', 'do_shortcode');
add_filter('term_description', 'shortcode_unautop');
add_filter('term_description', 'do_shortcode');
function filter_content_example($content)
{
    $content = do_shortcode($content);
    return $content;
}
add_filter('the_content', 'filter_content_example');


/** Add Widgets to theme */

function register_my_widgets_init()
{
    register_sidebar(array(
        'name' => 'sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="rounded">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => 'Footer - Left',
        'id' => 'footer_left',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => 'Footer - middle',
        'id' => 'footer_middle',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => 'Footer - right',
        'id' => 'footer_right',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="rounded">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'register_my_widgets_init');

/** Add Menus to theme */
function register_my_menus()
{
    register_nav_menus(
        array(
            'top-menu' => __('Top Menu'),
            'header-menu' => __('Header Menu'),
            'footer-menu' => __('Footer Menu')
        )
    );
}
add_action('init', 'register_my_menus');

// Add support for responsive embedded content.
add_theme_support('responsive-embeds');

/** disable the admin bar */
show_admin_bar(false);