<?php
    // Register Custom Navigation Walker
    if (!file_exists(get_template_directory() . '/class-wp-bootstrap-navwalker.php')) {
        # File does not exits...return error.
        return new WP_Error('class-wp-bootstrap-navwalker-missing', __('It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker'));
    } else {
         require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    }

    // Theme Support
    function wpb_theme_setup() {
        // Posts images
        add_theme_support('post-thumbnails');

        // Nav Menus
        register_nav_menus(array(
            'primary' => __('Primary Menu', 'CUSTOM THEME'),
        ));
    }

    // add_action is use to create something
                  // Hook, name of function
    add_action('after_setup_theme', 'wpb_theme_setup');

    // Excerpt Length Control
    function set_excerpt_length() {
        // number of words to show
        return 45;
    }

    // add_filter is use to edit something
                // Hook, name of function
    add_filter('excerpt_length', 'set_excerpt_length');