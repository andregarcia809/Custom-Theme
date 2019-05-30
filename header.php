<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta name="author" content="Andres Garcia" />
    <title>
        <?php bloginfo('name'); ?> |
        <?php is_front_page() ? bloginfo('description') :  wp_title(); ?>
    </title>
    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" type="text/css" rel="stylesheet"
        crossorigin="anonymous" />
    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet" />
    <!-- Adds widgets and plugins content that needs to be the head area (Very important to be here) -->
    <?php wp_head(); ?>
</head>

<body>
    <header class="blog-header">
        <nav class="navbar navbar-expand-md navbar-dark bg-primary py-2">
            <div class="container">
                <button class="navbar-toggler border-white" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'depth' => 2, // 1 = no dropdowns, 2 = with dropdowns.
                        'container' => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id' => 'navbarCollapse',
                        'menu_class' => 'navbar-nav mr-auto',
                        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                        'walker' => new WP_Bootstrap_Navwalker(),
                    ) );
                ?>
                <!-- <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div> -->
            </div>
        </nav>
    </header>

    <main role="main">
        <div class="container">
            <h1><?php bloginfo('name'); ?></h1>
            <p><?php bloginfo('description'); ?></p>
        </div>