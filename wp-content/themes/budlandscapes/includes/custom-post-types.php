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
        'menu_name'           => __('IGB Case Studies'),
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

    // $ydFaqLabels = array(
    //     'name'                => _x('YD FAQs', 'Post Type General Name'),
    //     'singular_name'       => _x('YD FAQ', 'Post Type Singular Name'),
    //     'menu_name'           => __('YD FAQs'),
    //     'parent_item_colon'   => __('Parent FAQ'),
    //     'all_items'           => __('View all'),
    //     'view_item'           => __('View YD FAQ'),
    //     'add_new_item'        => __('Add New'),
    //     'add_new'             => __('Add New'),
    //     'edit_item'           => __('Edit YD FAQ'),
    //     'update_item'         => __('Update YD FAQ'),
    //     'search_items'        => __('Search YD FAQ'),
    //     'not_found'           => __('Not Found'),
    //     'not_found_in_trash'  => __('Not found in Trash'),
    // );

    // $ydFaqArgs = array(
    //     'label'               => __('YD faqs'),
    //     'description'         => __('YD FAQs for ingenie Insurance'),
    //     'labels'              => $ydFaqLabels,
    //     // Features this CPT supports in Post Editor
    //     'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail',),
    //     // You can associate this CPT with a taxonomy or custom taxonomy. 
    //     'taxonomies'          => array('yd-sections'),
    //     /* A hierarchical CPT is like Pages and can have
    //     * Parent and child items. A non-hierarchical CPT
    //     * is like Posts.
    //     */
    //     'hierarchical'        => false,
    //     'public'              => true,
    //     'show_ui'             => true,
    //     'show_in_menu'        => true,
    //     'show_in_nav_menus'   => true,
    //     'show_in_admin_bar'   => true,
    //     'menu_position'       => 11,
    //     'menu_icon'           => 'dashicons-megaphone',
    //     'can_export'          => true,
    //     'has_archive'         => true,
    //     'exclude_from_search' => false,
    //     'publicly_queryable'  => true,
    //     'capability_type'     => 'post',
    //     'show_in_rest' => true,

    // );

    $heroLabels = array(
        'name'                => _x('Heros', 'Post Type General Name'),
        'singular_name'       => _x('Hero', 'Post Type Singular Name'),
        'menu_name'           => __('IGB Heros'),
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

    // $quoteLabels = array(
    //     'name'                => _x('Quotes', 'Post Type General Name'),
    //     'singular_name'       => _x('Quote', 'Post Type Singular Name'),
    //     'menu_name'           => __('IGB Testimonial!!'),
    //     'parent_item_colon'   => __('Parent Quote'),
    //     'all_items'           => __('View all Quotes'),
    //     'view_item'           => __('View Quote'),
    //     'add_new_item'        => __('Add New Quote'),
    //     'add_new'             => __('Add New Quote'),
    //     'edit_item'           => __('Edit Quote'),
    //     'update_item'         => __('Update Quote'),
    //     'search_items'        => __('Search Quote'),
    //     'not_found'           => __('Not Found'),
    //     'not_found_in_trash'  => __('Not found in Trash'),
    // );

    // $quoteArgs = array(
    //     'label'               => __('quotes'),
    //     'description'         => __('ingenie Insurance customer Quotes'),
    //     'labels'              => $quoteLabels,
    //     // Features this CPT supports in Post Editor
    //     'supports'            => array('title', 'editor', 'author', 'thumbnail', 'custom-fields'),
    //     // You can associate this CPT with a taxonomy or custom taxonomy. 
    //     'taxonomies'          => array(''),
    //     /* A hierarchical CPT is like Pages and can have
    //     * Parent and child items. A non-hierarchical CPT
    //     * is like Posts.
    //     */
    //     'hierarchical'        => false,
    //     'public'              => true,
    //     'show_ui'             => true,
    //     'show_in_menu'        => true,
    //     'show_in_nav_menus'   => true,
    //     'show_in_admin_bar'   => true,
    //     'menu_position'       => 7,
    //     'menu_icon'           => 'dashicons-format-quote',
    //     'can_export'          => true,
    //     'has_archive'         => true,
    //     'exclude_from_search' => false,
    //     'publicly_queryable'  => true,
    //     'capability_type'     => 'post',
    //     'show_in_rest' => true,

    // );

    // $igAdsLabels = array(
    //     'name'                => _x('IG Adverts', 'Post Type General Name'),
    //     'singular_name'       => _x('IG Advert', 'Post Type Singular Name'),
    //     'menu_name'           => __('IG Adverts'),
    //     'parent_item_colon'   => __('Parent Advert'),
    //     'all_items'           => __('View all adverts'),
    //     'view_item'           => __('View advert'),
    //     'add_new_item'        => __('Add New advert'),
    //     'add_new'             => __('Add New advert'),
    //     'edit_item'           => __('Edit advert'),
    //     'update_item'         => __('Update advert'),
    //     'search_items'        => __('Search advert'),
    //     'not_found'           => __('Not Found'),
    //     'not_found_in_trash'  => __('Not found in Trash'),
    // );

    // $igAdsArgs = array(
    //     'label'               => __('adverts'),
    //     'description'         => __('ingenie adverts for blog'),
    //     'labels'              => $igAdsLabels,
    //     // Features this CPT supports in Post Editor
    //     'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields',),
    //     // You can associate this CPT with a taxonomy or custom taxonomy. 
    //     'taxonomies'          => array('location'),
    //     /* A hierarchical CPT is like Pages and can have
    //     * Parent and child items. A non-hierarchical CPT
    //     * is like Posts.
    //     */
    //     'hierarchical'        => false,
    //     'public'              => true,
    //     'show_ui'             => true,
    //     'show_in_menu'        => true,
    //     'show_in_nav_menus'   => true,
    //     'show_in_admin_bar'   => true,
    //     'menu_position'       => 5,
    //     'menu_icon'           => 'dashicons-carrot',
    //     'can_export'          => true,
    //     'has_archive'         => true,
    //     'exclude_from_search' => false,
    //     'publicly_queryable'  => true,
    //     'capability_type'     => 'post',
    //     'show_in_rest' => true,

    // );


    $keyPeopleLabels = array(
        'name'                => _x('Key People', 'Post Type General Name'),
        'singular_name'       => _x('Person', 'Post Type Singular Name'),
        'menu_name'           => __('IGB Key People'),
        'parent_item_colon'   => __('Parent Person'),
        'all_items'           => __('View all Key People'),
        'view_item'           => __('View Person'),
        'add_new_item'        => __('Add New Person'),
        'add_new'             => __('Add New Person'),
        'edit_item'           => __('Edit Person'),
        'update_item'         => __('Update Person'),
        'search_items'        => __('Search Person'),
        'not_found'           => __('Not Found'),
        'not_found_in_trash'  => __('Not found in Trash'),
    );

    $keyPeopleArgs = array(
        'label'               => __('people'),
        'description'         => __('ingenie Business Key Peopl'),
        'labels'              => $keyPeopleLabels,
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
        'menu_icon'           => 'dashicons-businessperson',
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => true,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    // register_post_type('advertise', $igAdsArgs);
    // register_post_type('yd-faqs', $ydFaqArgs);
    // register_post_type('quotes', $quoteArgs);
    register_post_type('people', $keyPeopleArgs);
    register_post_type('heros', $heroArgs);
    register_post_type('press-release', $caseStudyArgs);
}

add_action('init', 'custom_post_type', 0);
