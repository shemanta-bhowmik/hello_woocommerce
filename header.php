<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="description" content="E-valy Limited | Online Shopping Mall">
        <meta property="title" content="E-valy Limited | Online Shopping Mall">
        <meta property="description" content="E-valy is an e-commerce site which will be capable of providing every kind of goods and products from every sector to every consumer located in Bangladesh.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!-- Header Section -->
        <header class="evaly-site-header">
            <div class="evaly-top-bar-header">
                <div class="container">
                    <div class="evaly-tob-bar-right-contact-info">
                        <ul class="evaly-top-bar-contact-menu">
                            <li>
                                <a href="tel:8809638111666"><i class="fad fa-mobile-alt"></i> 09638111666</a>
                            </li>
                            <li>
                                <a href="mailto:support@evaly.com.bd"><i class="fad fa-envelope"></i> support@evaly.com.bd</a>
                            </li>
                        </ul>
                    </div>
                    <div class="evaly-top-bar-right-info-section">
                        <span><i class="fal fa-mobile"></i> Save big on our app!</span>
                    </div>
                </div>
            </div>
            <div class="evaly-header logo-area">
                <div class="container">
                    <div class="logo">
                        <a href="index.php" class="logo">
                            <?php function_exists( 'the_custom_logo' ) ? the_custom_logo() : ''; ?>
                        </a>
                    </div>
                    <div class="search">
                        <form method="post" action="search.php" autocomplete="on" class="evaly-header-search-form">
                            <input type="text" name="header-search" placeholder="Search for...">
                            <button type="submit" name="search-header-top"><i class="fal fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="evaly-menu-bar">
                <div class="container">
                    <div class="menu">
                        <ul class="evaly-header-primary-menu">
                            <?php

                                // Primary Navigation Menu
                                wp_nav_menu( [
                                    'theme_location'    => 'primary_menu',
                                    'menu_class'        => '',
                                    'container'         => '<div>',
                                    'container_class'   => 'menu-container',
                                ] );

                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </header>