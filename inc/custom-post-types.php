<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


//chapter custom post type

// Register Custom Post Type chapter
// Post Type Key: chapter

function create_chapter_cpt() {

  $labels = array(
    'name' => __( 'Chapters', 'Post Type General Name', 'textdomain' ),
    'singular_name' => __( 'Chapter', 'Post Type Singular Name', 'textdomain' ),
    'menu_name' => __( 'Chapter', 'textdomain' ),
    'name_admin_bar' => __( 'Chapter', 'textdomain' ),
    'archives' => __( 'Chapter Archives', 'textdomain' ),
    'attributes' => __( 'Chapter Attributes', 'textdomain' ),
    'parent_item_colon' => __( 'Chapter:', 'textdomain' ),
    'all_items' => __( 'All Chapters', 'textdomain' ),
    'add_new_item' => __( 'Add New Chapter', 'textdomain' ),
    'add_new' => __( 'Add New', 'textdomain' ),
    'new_item' => __( 'New Chapter', 'textdomain' ),
    'edit_item' => __( 'Edit Chapter', 'textdomain' ),
    'update_item' => __( 'Update Chapter', 'textdomain' ),
    'view_item' => __( 'View Chapter', 'textdomain' ),
    'view_items' => __( 'View Chapters', 'textdomain' ),
    'search_items' => __( 'Search Chapters', 'textdomain' ),
    'not_found' => __( 'Not found', 'textdomain' ),
    'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
    'featured_image' => __( 'Featured Image', 'textdomain' ),
    'set_featured_image' => __( 'Set featured image', 'textdomain' ),
    'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
    'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
    'insert_into_item' => __( 'Insert into chapter', 'textdomain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this chapter', 'textdomain' ),
    'items_list' => __( 'Chapter list', 'textdomain' ),
    'items_list_navigation' => __( 'Chapter list navigation', 'textdomain' ),
    'filter_items_list' => __( 'Filter Chapter list', 'textdomain' ),
  );
  $args = array(
    'label' => __( 'chapter', 'textdomain' ),
    'description' => __( '', 'textdomain' ),
    'labels' => $labels,
    'menu_icon' => '',
    'supports' => array('title', 'editor', 'revisions', 'author', 'trackbacks', 'custom-fields', 'thumbnail',),
    'taxonomies' => array('category', 'post_tag'),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
    'menu_icon' => 'dashicons-universal-access-alt',
  );
  register_post_type( 'chapter', $args );
  
  // flush rewrite rules because we changed the permalink structure
  global $wp_rewrite;
  $wp_rewrite->flush_rules();
}
add_action( 'init', 'create_chapter_cpt', 0 );

//ACF SAVE and LOAD JSON
add_filter('acf/settings/save_json', 'alt_child_lit_json_save_point');
 
function alt_child_lit_json_save_point( $path ) {
    
    // update path
    $path = get_stylesheet_directory() . '/acf-json';
    // return
    return $path;
    
}


add_filter('acf/settings/load_json', 'alt_child_lit_json_load_point');

function alt_child_lit_json_load_point( $paths ) {
    
    // remove original path (optional)
    unset($paths[0]);
    
    // append path
    $paths[] = get_stylesheet_directory()  . '/acf-json';
    
    
    // return
    return $paths;
    
}

