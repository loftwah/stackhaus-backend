<?php
/*
 * Allow ACF to save a copy of it's settings to a JSON file
 */
	function custom_acf_save_directory($path) {
	    return get_stylesheet_directory() . '/acf';
	}
	add_filter('acf/settings/save_json', 'custom_acf_save_directory');

/*
 * Add ACF site options page
 */
	function stackhaus_add_acf_options() {
	    if( function_exists('acf_add_options_page') ) {
	        // Add `Theme General Settings` sub page
	    	acf_add_options_page(array(
	    		'page_title' 	=> 'Site Options',
	    		'menu_title'	=> 'Site Options',
	    		'menu_slug' 	=> 'site-options',
	    		'capability'	=> 'edit_posts',
	    		'redirect'		=> false,
	        	'show_in_graphql' => true,
	        	'position'		  => '60.1'
	    	));
	    }
	}
	add_action('acf/init', 'stackhaus_add_acf_options');    
