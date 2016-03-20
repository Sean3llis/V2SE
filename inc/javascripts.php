<?php

	function my_scripts(){
		// named handle for reference within wordpress, path to JS file, dependencies, version number, in_footer = set to true to output in get_footer()
		wp_enqueue_script( 'jquery');
		wp_enqueue_script( 'bootstrap_JS', get_template_directory_uri() . '/js/bootstrap.min.js', '', true );
		wp_enqueue_script( 'main_JS', get_template_directory_uri() . '/js/main.js', '', true );
		if( is_single() ){
			wp_enqueue_script( 'single_JS', get_template_directory_uri() . '/js/single.js', '', true );
		}

		wp_enqueue_script( 'velocity_JS', get_template_directory_uri() . '/bower_components/velocity/velocity.min.js', '', true );
		// wp_enqueue_script( 'velocity_UI_JS', get_template_directory_uri() . '/bower_components/velocity/velocity.ui.min.js', '', true );
	}

	add_action( 'wp_enqueue_scripts', 'my_scripts' );
