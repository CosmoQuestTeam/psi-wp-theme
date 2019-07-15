<?php
/**
 * Created by PhpStorm.
 * User: starstryder
 * Date: 7/10/19
 * Time: 11:04 AM
 */
?>
<html <?php language_attributes(); ?>>
<head>

    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">

    <!-- Metadata -->
    <meta property="og:url"                content="<?php echo site_url(); ?>" />
    <meta property="og:type"               content="website" />
    <meta property="og:title"              content="Planetary Science Institute" />
    <meta property="og:description"        content="Reaching throughout the solar system, and beyond." />
    <meta property="og:image"              content="<?php echo get_stylesheet_directory_uri(); ?>/images/PSI_Logo_circle.png" />
    <meta property="og:image:width"        content="300">
    <meta property="og:image:height"       content="300">
    <meta property="og:locale"             content="en_US">

    <!-- Twitter Metadata -->
    <meta name="twitter:card"       content="summary" />
    <meta name="twitter:site"       content="@planetarysci" />
    <meta name="twitter:creator"    content="@planetarysci" />
    <meta property="og:url"         content="http://psi.edu" />

    <?php wp_head(); ?>
</head>

<body>

<div id="header">
    <div class="container">
        <div id="title">
            <h1>
                <?php echo get_bloginfo('name'); ?>
            </h1>
        </div>

        <div id="logo">
            <?php
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

            if ( has_custom_logo() ) {
                echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . ' Logo">';
            } else {
                echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
            }
            ?>
        </div>
    </div>

</div>

