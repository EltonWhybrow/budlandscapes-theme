<?php
/*
Plugin Name: Budlandscapes Stats
Plugin URI: http://budlandscapes.co.uk
Description: Budlandscapes Business stats to change / keep all stats in check across environments. Can be used in all pages, posts, and templates.
NOTE: Budlandscapes plugin deploy as per and are not excluded in the pagelyignore file
Version: 1.0
Author: Budlandscapes
Author URI: http://budlandscapes.co.uk
*/

/*
// ------------------------
// USAGE

For use in landing pages/templates etc:
<?php echo do_shortcode("[lbl_mobile_number]"); ?>

For use in WYSIWYG Editor:
[learner_get_a_quote_url]

// ------------------------
*/
// ------------------------
// Budlandscapes CONTACT STATS
// ------------------------

function bl_mobile_number($atts)
{
    $bl_mobile_number = "07971 147 870";
    return $bl_mobile_number;
}

function bl_landline_number($atts)
{
    $bl_landline_number = "01628 410 090";
    return $bl_landline_number;
}

function bl_main_email($atts)
{
    $bl_main_email = "steve@budlandscapes.co.uk";
    return $bl_main_email;
}

// ------------------------
//
// Shortcodes
// Will make editiable from wordpress admin when have time
//
// ------------------------

add_shortcode('bl_mobile_number', 'bl_mobile_number');
add_shortcode('bl_landline_number', 'bl_landline_number');
add_shortcode('bl_main_email', 'bl_main_email');
