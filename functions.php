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

        // Post Formats
        add_theme_support('post-formats', array('aside', 'gallery'));
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

    // Widget Locations
    function wpb_init_widgets ($id) {
        register_sidebar(array(
            'name' => 'Sidebar',
            'id' => 'sidebar',
            'before_widget' => '<div class="sidebar-module">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
        ));

        register_sidebar(array(
            'name' => 'box1',
            'id' => 'box1',
            'before_widget' => '<div class="box">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        ));


        register_sidebar(array(
            'name' => 'box2',
            'id' => 'box2',
            'before_widget' => '<div class="box">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        ));


        register_sidebar(array(
            'name' => 'box3',
            'id' => 'box3',
            'before_widget' => '<div class="box">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        ));
    }

     // add_action is use to create something
                // Hook, name of function
    add_action('widgets_init', 'wpb_init_widgets');

    // Custom File
    require get_template_directory() . '/includes/customizer.php';