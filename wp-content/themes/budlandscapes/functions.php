<?php

use budlandscapes2022Theme\AutoLoader;
use budlandscapes2022Theme\View;

/*
 * Set up our auto loading class and mapping our namespace to the app directory.
 *
 * The autoloader follows PSR4 autoloading standards so, provided StudlyCaps are used for class, file, and directory
 * names, any class placed within the app directory will be autoloaded.
 *
 * i.e; If a class named SomeClass is stored in app/SomeDir/SomeClass.php, there is no need to include/require that file
 * as the autoloader will handle that for you.
 */

require get_stylesheet_directory() . '/app/AutoLoader.php';
$loader = new AutoLoader();
$loader->register();
$loader->addNamespace('budlandscapes2022Theme', get_stylesheet_directory() . '/app');

View::$view_dir = get_stylesheet_directory() . '/templates/views';

/* 
=================================
Load Javascript and Styles
=================================
*/
require get_stylesheet_directory() . '/includes/scripts-and-styles.php';

/* 
=================================
Theme Options
=================================
*/
add_theme_support('menus');
add_theme_support('post-thumbnails');

/* 
=================================
Image paths
=================================
*/
update_option('upload_url_path', '/wp-content/uploads');

/* 
=================================
Custom Image Sizes
=================================
*/
// add_image_size('blog-large', 750, 450, true);
// add_image_size('blog-small', 400, 200, true);
// add_image_size('ingenie-ads', 350, 350, true);
// add_image_size('quote_thumbnails', 120, 120, true);
add_image_size('hero-banner', 2880, 1500, true);
add_image_size('page-hero-banner', 1920, 500, true);
add_image_size('page-hero-mobile', 600, 400, true);

/* 
=================================
Includes
=================================
*/
require_once(__DIR__ . '/includes/register-and-add-classes-on-nav-menu.php');
require_once(__DIR__ . '/includes/custom-post-types.php');
require_once(__DIR__ . '/includes/custom-post-restrict-search.php');
require_once(__DIR__ . '/includes/custom-taxonomies.php');
require_once(__DIR__ . '/includes/custom-term-functions.php');
require_once(__DIR__ . '/includes/custom-post-titles.php');
require_once(__DIR__ . '/includes/shortcodes-sliders.php');
require_once(__DIR__ . '/includes/shortcodes-igb-button.php');
require_once(__DIR__ . '/includes/shortcodes-notifications.php');
require_once(__DIR__ . '/includes/shortcodes-notifications-cta.php');
require_once(__DIR__ . '/includes/shortcodes-hero-img.php');
require_once(__DIR__ . '/includes/shortcodes-faqs.php');

/* 
=================================
Hide Basic Posts to avoid confusion
=================================
*/

remove_filter('the_content', 'wpautop');

// function post_remove ()      //creating functions post_remove for removing menu item
// { 
//    remove_menu_page('edit.php');
// }

// add_action('admin_menu', 'post_remove');   //adding action for triggering function call


// Bloock author ryanna from editing CTP
function wp_author_remove_menu_items()
{
    if (!current_user_can('administrator')) :
        remove_menu_page('edit.php?post_type=people');
        remove_menu_page('edit.php?post_type=heros');
        remove_menu_page('edit.php?post_type=press-release');
    endif;
}
add_action('admin_menu', 'wp_author_remove_menu_items');



function enable_page_excerpt()
{
    add_post_type_support('page', array('excerpt'));
}
add_action('init', 'enable_page_excerpt');

// class Menu_With_Description extends Walker_Nav_Menu
// {
//     function start_el(&$output, $item, $depth = 0, $args = NULL, $id = 0)
//     {
//         global $wp_query;
//         $indent = ($depth) ? str_repeat("\t", $depth) : '';

//         $class_names = $value = '';

//         $classes = empty($item->classes) ? array() : (array) $item->classes;

//         $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item));
//         $class_names = ' class="' . esc_attr($class_names) . '"';

//         $output .= $indent . '<li id="menu-item-' . $item->ID . '"' . $value . $class_names . '>';

//         $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
//         $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
//         $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
//         $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

//         $item_output = $args->before;
//         $item_output .= '<a' . $attributes . '>';
//         $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
//         $item_output .= '<br /><span class="sub">' . $item->description . '</span>';
//         $item_output .= '</a>';
//         $item_output .= $args->after;

//         $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
//     }
// }
