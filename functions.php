<?php
/**
 * Created by PhpStorm.
 * User: starstryder
 * Date: 7/10/19
 * Time: 11:04 AM
 */

add_theme_support( 'custom-logo' );

function custom_logo_setup() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'custom_logo_setup' );


/** Add shortcode support to everything */

add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode');
add_filter( 'the_excerpt', 'shortcode_unautop');
add_filter( 'the_excerpt', 'do_shortcode');
add_filter( 'term_description', 'shortcode_unautop');
add_filter( 'term_description', 'do_shortcode' );
function filter_content_example($content) {
    $content = do_shortcode($content);
    return $content;
}
add_filter('the_content', 'filter_content_example');


/** Add Widgets to theme */

function register_my_widgets_init() {

    register_sidebar( array(
        'name'          => 'sidebar',
        'id'            => 'sidebar',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="rounded">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => 'Footer - Left',
        'id'            => 'footer_left',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => 'Footer - middle',
        'id'            => 'footer_middle',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => 'Footer - right',
        'id'            => 'footer_right',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="rounded">',
        'after_title'   => '</h3>',
    ) );

}
add_action( 'widgets_init', 'register_my_widgets_init' );

/** Add Menus to theme */
function register_my_menus() {
    register_nav_menus(
        array(
            'top-menu' => __( 'Top Menu'),
            'header-menu' => __( 'Header Menu' ),
            'footer-menu' => __( 'Footer Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );



/** disable the admin bar */
show_admin_bar(false);