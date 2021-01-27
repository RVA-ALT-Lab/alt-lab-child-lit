<?php
/**
 * UnderStrap functions and definitions
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
	'/custom-post-types.php',               // Load cpts
	'/acf.php',               // Load acf specific functions
);

foreach ( $understrap_includes as $file ) {
	require_once get_template_directory() . '/inc' . $file;
}


function add_chapter_to_dropdown( $pages ){
    $args = array(
        'post_type' => 'chapter'
    );
    $items = get_posts($args);
    $pages = array_merge($pages, $items);

    return $pages;
}
add_filter( 'get_pages', 'add_chapter_to_dropdown' );

//functional in that the chapters are now an option but URL piece below was failing for me
//from https://wordpress.stackexchange.com/a/126271/82797

// function enable_front_page_chapter( $query ){
// 	var_dump($query->query_vars)['post_type'];
//     // if('' == $query->query_vars['post_type'] && 0 != $query->query_vars['page_id'])
//     //     $query->query_vars['post_type'] = array( 'page', 'chapter' );
// }
// add_action( 'pre_get_posts', 'enable_front_page_chapter' );