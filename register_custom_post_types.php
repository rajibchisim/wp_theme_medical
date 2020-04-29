<?php

function registerServiceType()
{
    $labels = array(
        'name'                  => _x('Service', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('Service', 'Post type singular name', 'textdomain'),
        'menu_name'             => _x('Services', 'Admin Menu text', 'textdomain'),
        'name_admin_bar'        => _x('Service', 'Add New on Toolbar', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'add_new_item'          => __('Add New Service', 'textdomain'),
        'new_item'              => __('New Service', 'textdomain'),
        'edit_item'             => __('Edit Service', 'textdomain'),
        'view_item'             => __('View Service', 'textdomain'),
        'all_items'             => __('All Service', 'textdomain'),
        'search_items'          => __('Search Service', 'textdomain'),
        'parent_item_colon'     => __('Parent Service:', 'textdomain'),
        'not_found'             => __('No Services found.', 'textdomain'),
        'not_found_in_trash'    => __('No services found in Trash.', 'textdomain'),
        'featured_image'        => _x('Service Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain'),
        'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'archives'              => _x('Service archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain'),
        'insert_into_item'      => _x('Insert into services', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain'),
        'uploaded_to_this_item' => _x('Uploaded to this service', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain'),
        'filter_items_list'     => _x('Filter services list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain'),
        'items_list_navigation' => _x('Services list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain'),
        'items_list'            => _x('Services list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'service' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        'menu_icon'          => 'dashicons-store',
    );

    register_post_type('service', $args);
}
function registerDoctorType()
{
    $labels = array(
        'name'                  => _x('Doctor', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('Doctor', 'Post type singular name', 'textdomain'),
        'menu_name'             => _x('Doctors', 'Admin Menu text', 'textdomain'),
        'name_admin_bar'        => _x('Doctor', 'Add New on Toolbar', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'add_new_item'          => __('Add New Doctor', 'textdomain'),
        'new_item'              => __('New Doctor', 'textdomain'),
        'edit_item'             => __('Edit Doctor', 'textdomain'),
        'view_item'             => __('View Doctor', 'textdomain'),
        'all_items'             => __('All Doctor', 'textdomain'),
        'search_items'          => __('Search Doctor', 'textdomain'),
        'parent_item_colon'     => __('Parent Doctor:', 'textdomain'),
        'not_found'             => __('No doctors found.', 'textdomain'),
        'not_found_in_trash'    => __('No doctors found in Trash.', 'textdomain'),
        'featured_image'        => _x('Doctor Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain'),
        'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain'),
        'archives'              => _x('Doctor archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain'),
        'insert_into_item'      => _x('Insert into doctors', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain'),
        'uploaded_to_this_item' => _x('Uploaded to this doctor', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain'),
        'filter_items_list'     => _x('Filter doctors list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain'),
        'items_list_navigation' => _x('Doctors list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain'),
        'items_list'            => _x('Doctors list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'doctor' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
        'menu_icon'          => 'dashicons-heart',
    );

    register_post_type('doctor', $args);
}

function registerTestimonialType()
{
    $labels = array(
        'name'                  => _x('Testimonial', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('Testimonial', 'Post type singular name', 'textdomain'),
        'menu_name'             => _x('Testimonials', 'Admin Menu text', 'textdomain'),
        'name_admin_bar'        => _x('Testimonial', 'Add New on Toolbar', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'add_new_item'          => __('Add New Testimonial', 'textdomain'),
        'new_item'              => __('New Testimonial', 'textdomain'),
        'edit_item'             => __('Edit Testimonial', 'textdomain'),
        'view_item'             => __('View Testimonial', 'textdomain'),
        'all_items'             => __('All Testimonial', 'textdomain'),
      );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'testimonial' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
        'menu_icon'          => 'dashicons-thumbs-up',
    );

    register_post_type('testimonial', $args);
}

function registerContactInfoType()
{
    $labels = array(
        'name'                  => _x('Contact info', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('Contact info', 'Post type singular name', 'textdomain'),
        'menu_name'             => _x('Contact info', 'Admin Menu text', 'textdomain'),
        'name_admin_bar'        => _x('Contact info', 'Add New on Toolbar', 'textdomain'),
        'add_new'               => __('Add New', 'textdomain'),
        'add_new_item'          => __('Add New Contact info', 'textdomain'),
        'new_item'              => __('New Contact info', 'textdomain'),
        'edit_item'             => __('Edit Contact info', 'textdomain'),
        'view_item'             => __('View Contact info', 'textdomain'),
        'all_items'             => __('All Contact info', 'textdomain'),
      );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'contact_info' ),
        'capability_type'    => 'post',
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'author' ),
        'menu_icon'          => 'dashicons-email-alt2',
    );

    register_post_type('contact_info', $args);
}

// function registerDoctorType()
// {
//     $labels = array(
//         'name'                  => _x('Doctor', 'Post type general name', 'textdomain'),
//         'singular_name'         => _x('Doctor', 'Post type singular name', 'textdomain'),
//         'menu_name'             => _x('Doctors', 'Admin Menu text', 'textdomain'),
//         'name_admin_bar'        => _x('Doctor', 'Add New on Toolbar', 'textdomain'),
//         'add_new'               => __('Add New', 'textdomain'),
//         'add_new_item'          => __('Add New Doctor', 'textdomain'),
//         'new_item'              => __('New Doctor', 'textdomain'),
//         'edit_item'             => __('Edit Doctor', 'textdomain'),
//         'view_item'             => __('View Doctor', 'textdomain'),
//         'all_items'             => __('All Doctor', 'textdomain'),
//         'search_items'          => __('Search Doctor', 'textdomain'),
//         'parent_item_colon'     => __('Parent Doctor:', 'textdomain'),
//         'not_found'             => __('No doctors found.', 'textdomain'),
//         'not_found_in_trash'    => __('No doctors found in Trash.', 'textdomain'),
//         'featured_image'        => _x('Doctor Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain'),
//         'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain'),
//         'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain'),
//         'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain'),
//         'archives'              => _x('Doctor archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain'),
//         'insert_into_item'      => _x('Insert into doctors', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain'),
//         'uploaded_to_this_item' => _x('Uploaded to this doctor', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain'),
//         'filter_items_list'     => _x('Filter doctors list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain'),
//         'items_list_navigation' => _x('Doctors list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain'),
//         'items_list'            => _x('Doctors list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain'),
//     );
//
//     $args = array(
//         'labels'             => $labels,
//         'public'             => true,
//         'publicly_queryable' => true,
//         'show_ui'            => true,
//         'show_in_menu'       => true,
//         'query_var'          => true,
//         'rewrite'            => array( 'slug' => 'doctor' ),
//         'capability_type'    => 'post',
//         'has_archive'        => true,
//         'hierarchical'       => false,
//         'menu_position'      => null,
//         'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
//         'menu_icon'          => 'dashicons-heart',
//     );
//
//     register_post_type('doctor', $args);
// }
