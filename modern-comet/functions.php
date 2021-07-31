<?php

    # stylesheets registration
    function modern_comet_styles_func() {

        wp_enqueue_style( 'style', get_stylesheet_uri() );

    }
    add_action( 'wp_enqueue_scripts', 'modern_comet_styles_func' );