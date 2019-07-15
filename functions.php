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


/** Add Widgets to theme */

function arphabet_widgets_init() {

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
add_action( 'widgets_init', 'arphabet_widgets_init' );

// disable the admin bar
show_admin_bar(false);