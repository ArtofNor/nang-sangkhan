<?php
/**
 * Nang Sangkhan Theme functions and definitions
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Theme Setup
 */
function nangsangkhan_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails
    add_theme_support( 'post-thumbnails' );

    // Register navigation menus
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'nangsangkhan' ),
    ) );

    // Switch default core markup to output valid HTML5
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );
}
add_action( 'after_setup_theme', 'nangsangkhan_setup' );

/**
 * Register Character Custom Post Type
 */
function create_character_post_type() {
    $labels = array(
        'name'                  => _x( 'Characters', 'Post type general name', 'nangsangkhan' ),
        'singular_name'         => _x( 'Character', 'Post type singular name', 'nangsangkhan' ),
        'menu_name'            => _x( 'Characters', 'Admin Menu text', 'nangsangkhan' ),
        'name_admin_bar'       => _x( 'Character', 'Add New on Toolbar', 'nangsangkhan' ),
        'add_new'             => __( 'Add New', 'nangsangkhan' ),
        'add_new_item'        => __( 'Add New Character', 'nangsangkhan' ),
        'new_item'            => __( 'New Character', 'nangsangkhan' ),
        'edit_item'           => __( 'Edit Character', 'nangsangkhan' ),
        'view_item'           => __( 'View Character', 'nangsangkhan' ),
        'all_items'           => __( 'All Characters', 'nangsangkhan' ),
        'search_items'        => __( 'Search Characters', 'nangsangkhan' ),
        'not_found'           => __( 'No characters found.', 'nangsangkhan' ),
        'not_found_in_trash'  => __( 'No characters found in Trash.', 'nangsangkhan' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'character' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-groups',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'excerpt' ),
        'show_in_rest'       => true, // Enable Gutenberg editor
    );

    register_post_type( 'character', $args );
}
add_action( 'init', 'create_character_post_type' );

/**
 * Register Character Category Taxonomy
 */
function create_character_taxonomy() {
    $labels = array(
        'name'              => _x( 'Character Categories', 'taxonomy general name', 'nangsangkhan' ),
        'singular_name'     => _x( 'Character Category', 'taxonomy singular name', 'nangsangkhan' ),
        'search_items'      => __( 'Search Character Categories', 'nangsangkhan' ),
        'all_items'         => __( 'All Character Categories', 'nangsangkhan' ),
        'parent_item'       => __( 'Parent Character Category', 'nangsangkhan' ),
        'parent_item_colon' => __( 'Parent Character Category:', 'nangsangkhan' ),
        'edit_item'         => __( 'Edit Character Category', 'nangsangkhan' ),
        'update_item'       => __( 'Update Character Category', 'nangsangkhan' ),
        'add_new_item'      => __( 'Add New Character Category', 'nangsangkhan' ),
        'new_item_name'     => __( 'New Character Category Name', 'nangsangkhan' ),
        'menu_name'         => __( 'Categories', 'nangsangkhan' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'character-category' ),
        'show_in_rest'      => true,
    );

    register_taxonomy( 'character_category', array( 'character' ), $args );
}
add_action( 'init', 'create_character_taxonomy' );

/**
 * Enqueue scripts and styles
 */
function nangsangkhan_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style( 'nangsangkhan-style', get_stylesheet_uri(), array(), '1.0.0' );

    // Enqueue main JavaScript file
    wp_enqueue_script( 'nangsangkhan-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'nangsangkhan_scripts' );

/**
 * Register widget areas
 */
function nangsangkhan_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'nangsangkhan' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'nangsangkhan' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'nangsangkhan_widgets_init' ); 