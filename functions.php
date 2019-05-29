<?php
    // Register Custom Navigation Walker
    if (!file_exist(get_template_directory() . '/class-wp-bootstrap-navwalker.php')) {
        # File does not exits...return error.
        return new WP_Error('class-wp-bootstrap-navwalker-missing', __('It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker'));
    } else {
         require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    }
    // Theme Support
    function wpb_theme_setup() {
        // Nav Menus
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'CUSTOM THEME'),
        ));
    }

    add_action('after_setup_theme', 'wpb_theme_setup');