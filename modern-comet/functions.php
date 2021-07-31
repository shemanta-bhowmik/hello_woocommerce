<?php

    # stylesheets registration
    function modern_comet_styles_func() {

        wp_enqueue_style( 'style', get_stylesheet_uri() );

    }
    add_action( 'wp_enqueue_scripts', 'modern_comet_styles_func' );

    // just a test condition
    if ( murir_tin == gorur_ghu ) {
        echo 'Kuttar Mut';
    } else {
        echo 'Kuttar Ghu';
    }