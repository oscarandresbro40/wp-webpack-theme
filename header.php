<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php
    if (has_nav_menu('nav_main')) {
        wp_nav_menu(array(
            'theme_location' => 'nav_main',
            'menu_class' => 'header-navigation',
            'container' => 'nav',
            'menu_id' => 'navigation',
            'depth' => 2
        ));
    }
    ?>
    <?php
    if (function_exists('wp_body_open')) {
        wp_body_open();
    }
    ?>