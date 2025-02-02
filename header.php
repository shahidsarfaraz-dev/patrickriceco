<?php $theme_url = get_template_directory_uri(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="container">
            <nav class="navbar">
                <a href="/" class="navbar-brand">
                    <img src="<?= $theme_url; ?>/assets/img/dummy-logo.svg" alt="logo" class="logo" width="211" height="24">
                </a>
                <div class="hamburger-menu">
                    <div class="bar"></div>
                </div>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary-menu',
                    'container' => false,
                    'menu_class' => 'menu',
                ));
                ?>
                <a href="/get-free-strategy/" class="btn btn-primary d-none d-lg-block">Get Free Strategy</a>
            </nav>
        </div>
    </header>
    <main class="main overflow-hidden">