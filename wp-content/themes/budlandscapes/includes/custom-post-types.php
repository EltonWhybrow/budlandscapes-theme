<?php
/* 
    =================================
    Custom Post Types
    =================================
*/

function custom_post_type()
{

    $caseStudyLabels = array(
        'name'                => _x('Case Studies', 'Post Type General Name'),
        'singular_name'       => _x('Case Studies', 'Post Type Singular Name'),
        'menu_name'           => __('Case Studies'),
        'parent_item_colon'   => __('Parent CS'),
        'all_items'           => __('View all'),
        'view_item'           => __('View Case Studies'),
        'add_new_item'        => __('Add New'),
        'add_new'             => __('Add New'),
        'edit_item'           => __('Edit Case Studies'),
        'update_item'         => __('Update Case Studies'),
        'search_items'        => __('Search Case Studies'),
        'not_found'           => __('Not Found'),
        'not_found_in_trash'  => __('Not found in Trash'),
    );

    $caseStudyArgs = array(
        'label'               => __('case-study'),
        'description'         => __('Case studies for ingenie Business'),
        'labels'              => $caseStudyLabels,
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields'),
        // You can associate this Custom Post Type with a taxonomy or custom taxonomy. 
        // 'taxonomies'          => array('learner-sections'),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 6,
        'menu_icon'           => 'dashicons-welcome-widgets-menus',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
    );


    $heroLabels = array(
        'name'                => _x('Heros', 'Post Type General Name'),
        'singular_name'       => _x('Hero', 'Post Type Singular Name'),
        'menu_name'           => __('Hero Slider'),
        'parent_item_colon'   => __('Parent Hero'),
        'all_items'           => __('View all Heros'),
        'view_item'           => __('View Hero'),
        'add_new_item'        => __('Add New Hero'),
        'add_new'             => __('Add New Hero'),
        'edit_item'           => __('Edit Hero'),
        'update_item'         => __('Update Hero'),
        'search_items'        => __('Search Hero'),
        'not_found'           => __('Not Found'),
        'not_found_in_trash'  => __('Not found in Trash'),
    );

    $heroArgs = array(
        'label'               => __('heros'),
        'description'         => __('ingenie Business Hero Banner'),
        'labels'              => $heroLabels,
        // Features this CPT supports in Post Editor
        'supports'            => array('title', 'editor', 'author', 'thumbnail', 'custom-fields'),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array(''),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 7,
        'menu_icon'           => 'dashicons-superhero',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => true,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    register_post_type('heros', $heroArgs);
    register_post_type('press-release', $caseStudyArgs);
}

add_action('init', 'custom_post_type', 0);
