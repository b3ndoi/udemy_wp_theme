<?php

function ju_setup_theme()
{
    // Adds menus to the theme
 add_theme_support( 'post-thumbnails' );
 add_theme_support( 'menus' );
 register_nav_menu( 'primary', __( 'Primary Menu', 'undemy' ) );
}