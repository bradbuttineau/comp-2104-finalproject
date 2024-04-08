<!doctype html>
<html lang="<?php language_attributes(); ?>" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <!-- add bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    <!--add custom css-->
    <link rel="stylesheet"
          href="<?php echo esc_url(home_url('wp-content/themes/finalproject/assets/stylesheet.css')); ?>"/>
    <title>Hardware store</title>
</head>
<body <?php body_class(); ?>
<header class="default-header">
    <nav>
        <a href="<?php echo esc_url(home_url()); ?>">
            <img class="logo"
                 src="<?php echo esc_url(home_url('wp-content/uploads/2024/04/real-estate-icon-logo-template-design-Made-with-PosterMyWall.jpg')); ?>"
                 alt="header logo">
        </a>
        <h1 class="home-title"> Brad's Hardware</h1>
        <div id="navbarNav">
            <?php
            wp_nav_menu(array(
                'menu' => 'main',
                "nav" => 'navbarNav',
                'theme location' => '',
                'depth' => 2,
                'fallback_cb' => false

            ));
            ?>
    </nav>

    </div>
</header>

