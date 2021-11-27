<?php

/* 
    =================================
    Menus
    =================================
*/
register_nav_menus(
    array(

        'main-about-us-menu' => 'About Us Menu Location',
        'main-core-capabilities-menu' => 'Core Capabilities Menu Location',
        'main-expertise-menu' => 'Expertise Menu Location',
        'main-news-menu' => 'News Menu Location',
        'main-get-in-touch-menu' => 'Get In Touch Menu Location',
        'burger-menu' => 'Mobile Menu Location',
        'side-menu' => 'Side Menu Location',
    )
);


// Adding classes to the menu to use tailwind
function add_additional_class_on_li($classes, $item, $args)
{
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
