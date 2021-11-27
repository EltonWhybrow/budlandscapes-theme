<?php

/* 
    =================================
Buttons
    =================================
*/

function get_igb_button($atts)
{
    extract(shortcode_atts(array(
        'text' => 'Go',
        'size' => '',
        'type' => 'primary',
        'url' => '',
        'qstring' => '',
    ), $atts));

    ob_start();
    set_query_var('text', $text); // pass var to template
    set_query_var('size', $size); // pass var to template
    set_query_var('type', $type); // pass var to template
    set_query_var('url', $url); // pass var to template
    set_query_var('qstring', $qstring); // pass var to template
    get_template_part('./templates/partials/section', 'igb-button');
    return ob_get_clean();
}
add_shortcode('igb-button', 'get_igb_button');
