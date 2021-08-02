<?php

	// Theme Stylesheets
	function evaly_stylesheets_func() {
	
		wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css' );
	
	}
	add_action( 'wp_enqueue_scripts', 'evaly_stylesheets_func' );


	// Theme Supports
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo' );


	// Textdomain register
	load_theme_textdomain( 'evaly', get_template_directory_uri() . '/languages' );


	// Dynamic Menu
	register_nav_menus( [

		'primary_menu'	=> __( 'Primary Menu', 'evaly' ),
		'footer_menu'	=> __( 'Footer Menu', 'evaly' ),
	
	] );


	// Unhook Woocommerce Actions
	remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
	remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

	// woocommerce wrapper start
	function evaly_woocommerce_wrapper_start() {

		echo '<div class="Huddai-Dilam">';

	}
	add_action( 'woocommerce_before_main_content', 'evaly_woocommerce_wrapper_start', 10 );

	// woocommmerce wrapper end
	function evaly_woocommerce_wrapper_end() {

		echo '</div>';

	}
	add_action( 'woocommerce_after_main_content', 'evaly_woocommerce_wrapper_end', 10 );
