<?php

	function my_scripts(){
		// named handle for reference within wordpress, path to JS file, dependencies, version number, in_footer = set to true to output in get_footer()
		wp_enqueue_script( 'bootstrap_JS', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true );
		wp_enqueue_script( 'main_JS', get_template_directory_uri() . '/js/main.js', array(), '', true );
		wp_deregister_script( 'jquery' );
	}

	add_action( 'wp_enqueue_scripts', 'my_scripts' );
