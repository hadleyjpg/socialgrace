<?php 

function socialgrace_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'socialgrace_theme_support');



function socialgrace_menus() {
    $locations = array(
        'primary' => 'Primary',
        'footer' => 'Footer'
    );

    register_nav_menus($locations);
}

add_action('init', 'socialgrace_menus');



function socialgrace_register_styles() {
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('socialgrace-normalize', get_template_directory_uri() . '/assets/css/normalize.css', array(), 1.0, 'all');
    wp_enqueue_style('socialgrace-styles', get_template_directory_uri() . '/style.css', array(), $version, 'all');
}

add_action('wp_enqueue_scripts', 'socialgrace_register_styles');



function socialgrace_register_scripts() {
    wp_enqueue_script('socialgrace-index', get_template_directory_uri() . '/assets/javascript/index.js', array(), 1.0, 'all');
}

add_action('wp_enqueue_scripts', 'socialgrace_register_scripts');


// Portfolio & Services custom post types function
function socialgrace_create_posttype() {
 
    register_post_type( 'portfolio',
    // CPT Options
        array(
            'labels' => array(
                'name'                => _x( 'Portfolio', 'Post Type General Name', 'socialgrace' ),
                'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'socialgrace' ),
                'menu_name'           => __( 'Portfolio', 'socialgrace' ),
                'parent_item_colon'   => __( 'Parent Project', 'socialgrace' ),
                'all_items'           => __( 'All Projects', 'socialgrace' ),
                'view_item'           => __( 'View Project', 'socialgrace' ),
                'add_new_item'        => __( 'Add New Project', 'socialgrace' ),
                'add_new'             => __( 'Add New', 'socialgrace' ),
                'edit_item'           => __( 'Edit Project', 'socialgrace' ),
                'update_item'         => __( 'Update Project', 'socialgrace' ),
                'search_items'        => __( 'Search Project', 'socialgrace' ),
                'not_found'           => __( 'Not Found', 'socialgrace' ),
                'not_found_in_trash'  => __( 'Not found in Trash', 'socialgrace' ),
            ),
            'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields', 'author', ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-camera',
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'rewrite' => array('slug' => 'work'),
            'capability_type'     => 'post',
            'show_in_rest' => true,
            
 
        )
    );

    register_post_type( 'services',
    // CPT Options
        array(
            'labels' => array(
                'name'                => _x( 'Services', 'Post Type General Name', 'socialgrace' ),
                'singular_name'       => _x( 'Service', 'Post Type Singular Name', 'socialgrace' ),
                'menu_name'           => __( 'Services', 'socialgrace' ),
                'parent_item_colon'   => __( 'Parent Service', 'socialgrace' ),
                'all_items'           => __( 'All Services', 'socialgrace' ),
                'view_item'           => __( 'View Service', 'socialgrace' ),
                'add_new_item'        => __( 'Add New Service', 'socialgrace' ),
                'add_new'             => __( 'Add New', 'socialgrace' ),
                'edit_item'           => __( 'Edit Service', 'socialgrace' ),
                'update_item'         => __( 'Update Service', 'socialgrace' ),
                'search_items'        => __( 'Search Service', 'socialgrace' ),
                'not_found'           => __( 'Not Found', 'socialgrace' ),
                'not_found_in_trash'  => __( 'Not found in Trash', 'socialgrace' ),
            ),
            'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields', 'author', ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-welcome-widgets-menus',
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'rewrite' => array('slug' => 'services'),
            'capability_type'     => 'post',
            'show_in_rest' => true,
 
        )
    );
}

add_action( 'init', 'socialgrace_create_posttype' );



// Portfolio Categories 
function create_portfolio_hierarchical_taxonomy() {
 
  $labels = array(
    'name' => _x( 'Categories', 'taxonomy general name' ),
    'singular_name' => _x( 'Category', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Categories' ),
    'all_items' => __( 'All Categories' ),
    'parent_item' => __( 'Parent Category' ),
    'parent_item_colon' => __( 'Parent Category:' ),
    'edit_item' => __( 'Edit Category' ), 
    'update_item' => __( 'Update Category' ),
    'add_new_item' => __( 'Add New Category' ),
    'new_item_name' => __( 'New Category Name' ),
    'menu_name' => __( 'Categories' ),
  );    
 
  register_taxonomy('Categories',array('portfolio'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_in_rest' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'work' ),
  ));
 
}

add_action( 'init', 'create_portfolio_hierarchical_taxonomy', 0 );


// Portolfio Meta Box
add_filter( 'rwmb_meta_boxes', 'socialgrace_register_meta_boxes' );

function socialgrace_register_meta_boxes( $meta_boxes ) {
    $prefix = 'socialgrace_';

    $meta_boxes[] = [
        'title'   => esc_html__( 'Social Grace Portfolio', 'online-generator' ),
        'post_types' => 'portfolio',
        'id'      => 'portfolio',
        'context' => 'normal',
        'fields'  => [
            [
                'type' => 'heading',
                'name' => 'Intro',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Client', 'online-generator' ),
                'id'   => $prefix . 'client',
            ],
            [
                'type' => 'textarea',
                'name' => esc_html__( 'Project Description', 'online-generator' ),
                'id'   => $prefix . 'project_description',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Social Media Handle', 'online-generator' ),
                'id'   => $prefix . 'social_media_handle',
            ],
            [
                'type' => 'url',
                'name' => esc_html__( 'Instagram URL', 'online-generator' ),
                'id'   => $prefix . 'instagram_url',
            ],
            [
                'type' => 'url',
                'name' => esc_html__( 'Facebook URL', 'online-generator' ),
                'id'   => $prefix . 'facebook_url',
            ],
            [
                'type' => 'heading',
                'name' => 'Image Gallery',
            ],
            [
                'type'             => 'image_advanced',
                'name'             => esc_html__( 'Images', 'online-generator' ),
                'id'               => $prefix . 'image_gallery',
                'max_file_uploads' => 20,
            ],
            [
                'type' => 'heading',
                'name' => 'Testimonial',
            ],
            [
                'type' => 'textarea',
                'name' => esc_html__( 'Testimonial', 'online-generator' ),
                'id'   => $prefix . 'testimonial',
            ],
            [
                'type' => 'text',
                'name' => esc_html__( 'Client Name', 'online-generator' ),
                'id'   => $prefix . 'client_name',
            ],
        ],
    ];

    return $meta_boxes;
}    


// Pages Meta Box
add_filter( 'rwmb_meta_boxes', 'your_prefix_register_meta_boxes' );

function your_prefix_register_meta_boxes( $meta_boxes ) {
    $prefix = 'socialgrace_';

    $meta_boxes[] = [
        'title'      => esc_html__( 'Social Grace Theme Options', 'online-generator' ),
        'id'         => 'socialgrace_pages',
        'post_types' => ['page'],
        'context'    => 'normal',
        'fields'     => [
            [
                'type' => 'text',
                'name' => esc_html__( 'Heading', 'online-generator' ),
                'id'   => $prefix . 'heading',
            ],
            [
                'type' => 'textarea',
                'name' => esc_html__( 'Description', 'online-generator' ),
                'id'   => $prefix . 'description',
            ],
        ],
    ];

    return $meta_boxes;
}

?>