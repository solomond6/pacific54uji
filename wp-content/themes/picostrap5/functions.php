<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


$picostrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/clean-head.php',							// Eliminates useless meta tags, emojis, etc            
	'/enqueues.php', 							// Enqueue scripts and styles.     
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	//'/hooks.php',                           // Custom hooks.
	//'/extras.php',                          // Custom functions that act independently of the theme templates.
	//'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	//'/jetpack.php',                         // Load Jetpack compatibility file.
	'/bootstrap-navwalker.php',    			// Load custom WordPress nav walker. 
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions. 
	'/customizer-assets/customizer.php',	//Defines Customizer options
	'/customizer-assets/scss-compiler.php', //To interface the Customizer with the SCSS php compiler	 
	'/customizer-assets/livereload.php', //To automatically trigger SCSS compiling when source sass changes	 
	'/options-page.php',                  // Load theme options page. 
	'/content-filtering.php',				//for LC compatibility when shutting down plugin

);

add_filter('template_redirect', function () {
  ob_start(null, 0, 0);
});

add_action('wp_head', 'add_acf_form_head');

function add_acf_form_head(){
	acf_form_head();
}

add_shortcode('contact_form', 'display_contact_form');


function display_contact_form(){
	ob_start();
	acf_form(
		array(
			'post_id' => 'new_post',
			'post_title' => false,
			'form' => true,
			'new_post' => array(
				'post_type' => 'form-log',
				'post_status' => 'publish',
			),
			'field_groups' => array(7),
			'submit_value' => 'Submit',
			'return' => home_url('form-log')
		)
	);
}

foreach ( $picostrap_includes as $file ) {
	require_once get_template_directory() . '/inc' . $file;
}

//PURELY OPT-IN FEATURES ////////////////

//OPTIONAL: DISABLE WORDPRESS COMMENTS
if (get_theme_mod("singlepost_disable_comments") ) require_once locate_template('/inc/opt-in/disable-comments.php'); 

//OPTIONAL: BACK TO TOP
if (get_theme_mod("enable_back_to_top") ) require_once locate_template('/inc/opt-in/back-to-top.php');

//OPTIONAL: LIGHTBOX  
if (get_theme_mod("enable_lightbox") ) require_once locate_template('/inc/opt-in/lightbox.php');
	
//OPTIONAL: TOOLTIPS  
if (get_theme_mod("enable_tooltips") ) require_once locate_template('/inc/opt-in/initialize-tooltips.php');
	
//OPTIONAL: DETECT PAGE SCROLL
if (get_theme_mod("enable_detect_page_scroll") ) require_once locate_template('/inc/opt-in/detect-page-scroll.php');

//OPTIONAL: DISABLE GUTENBERG  
if (get_theme_mod("disable_gutenberg") ) require_once locate_template('/inc/opt-in/disable-gutenberg.php');
	
//OPTIONAL: DISABLE WIDGETS BLOCK EDITOR  
if (get_theme_mod("disable_widgets_block_editor") ) require_once locate_template('/inc/opt-in/disable-widgets-block-editor.php');
	
//OPTIONAL: DISABLE XML/RPC
if (get_theme_mod("disable_xml_rpc") ) require_once locate_template('/inc/opt-in/disable-xml-rpc.php');
	