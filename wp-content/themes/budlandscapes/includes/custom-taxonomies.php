<?php
/* 
    =================================
    Custom Taxonomies
    =================================
*/

function create_custom_hierarchical_taxonomy()
{

    // Add new taxonomy, make it hierarchical or like tags [false]

    $ydFaqTaxlabels = array(
        'name' => _x('Sections', 'taxonomy general name'),
        'singular_name' => _x('Section', 'taxonomy singular name'),
        'search_items' =>  __('Search Sections'),
        'all_items' => __('All Sections'),
        'parent_item' => __('Parent Section'),
        'parent_item_colon' => __('Parent Section:'),
        'edit_item' => __('Edit Section'),
        'update_item' => __('Update Section'),
        'add_new_item' => __('Add New Section'),
        'new_item_name' => __('New Section Name'),
        'menu_name' => __('Sections'),
    );

    register_taxonomy('yd-sections', array('yd-faqs'), array(
        'hierarchical' => true,
        'labels' => $ydFaqTaxlabels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'section'),
    ));

    $igAdsTaxlabels = array(
        'name' => _x('Locations', 'taxonomy general name'),
        'singular_name' => _x('Location', 'taxonomy singular name'),
        'search_items' =>  __('Search Locations'),
        'all_items' => __('All Locations'),
        'parent_item' => __('Parent Location'),
        'parent_item_colon' => __('Parent Location:'),
        'edit_item' => __('Edit Location'),
        'update_item' => __('Update Location'),
        'add_new_item' => __('Add New Location'),
        'new_item_name' => __('New Location Name'),
        'menu_name' => __('Locations'),
    );

    register_taxonomy('locations', array('advertise'), array(
        'hierarchical' => true,
        'labels' => $igAdsTaxlabels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'location'),
    ));
}

//hook into the init action and call create_book_taxonomies when it fires
add_action('init', 'create_custom_hierarchical_taxonomy', 0);
