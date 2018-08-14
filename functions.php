<?php

/**
* Download styles and scripts
**/

function load_style_script(){

    wp_deregister_script('jquery');

    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), null, true);

    wp_enqueue_script('owl-carousel-js', get_template_directory_uri() . '/libs/owlcarousel/owl.carousel.min.js', array('jquery') );

    wp_enqueue_script('js-main', get_template_directory_uri() . '/js/common.js', array('jquery') );

    wp_enqueue_style('fontawesome-all', get_template_directory_uri() . '/libs/fontawesome/css/fontawesome-all.min.css');

    wp_enqueue_style('line-awesome', get_template_directory_uri() . '/libs/line-awesome/css/line-awesome-font-awesome.min.css');

    wp_enqueue_style('owl-carousel-css', get_template_directory_uri() . '/libs/owlcarousel/css/owl.carousel.min.css');

    wp_enqueue_style('owl-theme-default', get_template_directory_uri() . '/libs/owlcarousel/css/owl.theme.default.min.css');
    
    wp_enqueue_style('fonts-css', get_template_directory_uri() . '/css/fonts.min.css');
    wp_enqueue_style('header-css', get_template_directory_uri() . '/css/header.min.css');
    wp_enqueue_style('main-css', get_template_directory_uri() . '/css/main.min.css');
    wp_enqueue_style('style-css', get_template_directory_uri() . '/style.css');
    
}
add_action('wp_enqueue_scripts', 'load_style_script');
/**

* Thumbnail support

**/

add_theme_support('post-thumbnails');

// Menu

register_nav_menus(array(

    'top_menu'    => 'Top menu'
));

add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() {
    add_image_size( 'slider-img', 293, 299, true );
    add_image_size( 'blog-post', 285, 285, true );
    add_image_size( 'crop-product', 585, 340, true );
}

function my_acf_init() {

	acf_update_setting('google_api_key', 'AIzaSyDcALw80MWX_ehpArhGXlLYI4hQULDlXp4');
}

add_action('acf/init', 'my_acf_init');


function wptutsplus_create_post_type() {
    $labels = array(
        'name' => __( 'Products' ),
        'singular_name' => __( 'products', 'products'),
        'add_new' => __( 'Add new product' ),
        'add_new_item' => __( 'Add product' ),
        'edit_item' => __( 'Edit product' ),
        'new_item' => __( 'New product' ),
        'view_item' => __( 'View product' ),
        'search_items' => __( 'Find the product' ),
        'not_found' =>  __( 'There are no such articles' ),
        'not_found_in_trash' => __( 'Not found in trash' ),
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => false,
        'post_type' => 'products',
        'publicly_queryable' => true,
        'hierarchical' => false,
        'menu_icon'           => 'dashicons-cart',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'custom-fields',
            'thumbnail',
            'page-attributes'
        ),
        'taxonomies' => array( 'Categories', 'products'),
        'rewrite' => array(
        'slug'	=> 'products',
                'with_front'  => false,
         ),

    );
    register_post_type( 'products', $args );
}
add_action( 'init', 'wptutsplus_create_post_type' );

add_action( 'init', 'create_my_taxonomies', 0 );
function create_my_taxonomies() {
    register_taxonomy(
        'products_categories',
        'products',
          array(
            'labels' => array(
                'name' => 'Categories',
                'add_new_item' => 'Add new category',
                'new_item_name' => "Add"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true
        )
    );
}

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts'
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Social networks',
        'menu_title'    => 'Social networks',
        'parent_slug'  => 'theme-general-settings'
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Footer content',
        'menu_title'    => 'Footer content',
        'parent_slug'   => 'theme-general-settings'
    ));

}
