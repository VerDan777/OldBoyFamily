<?php
    function oldboyFamily_theme_setup() {
        // Menu support
        register_nav_menus(array(
            "primary"   => __('Primary Menu'),
        ));
    }
    add_action('after_setup_theme', 'oldboyFamily_theme_setup');

    function remove_admin_login_header() {
        remove_action('wp_head', '_admin_bar_bump_cb');
    }
    add_theme_support( 'admin-bar', array( 'callback' => '__return_false' ) );

    ?>