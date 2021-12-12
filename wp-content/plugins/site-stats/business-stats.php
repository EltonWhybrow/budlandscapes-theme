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
<?php echo do_shortcode("[ligb_main_number]"); ?>

For use in WYSIWYG Editor:
[learner_get_a_quote_url]

// ------------------------
*/

// ------------------------
// Budlandscapes CONTACT STATS
// ------------------------

function igb_main_number($atts)
{
$igb_main_number = "<a class='primary-link-sm' href='tel:+44XXXXXXXXXXX'>+44 (0)XXXXX XXX XXX</a>";
return $igb_main_number;
}

function igb_main_email($atts)
{
$igb_main_email = "<a class='primary-link-sm' href='mailto:info@XXXX.com' target='_blank'
    rel='noopener noreferrer'>info@XXXX.com</a>";
return $igb_main_email;
}

function igb_main_number_invert($atts)
{
$igb_main_number_invert = "<a class='primary-link-sm text-white hover:text-igb-grey-100' href='tel:+44XXXXXXXXXXX'>+44 (0)XXXXX XXX XXX</a>";
return $igb_main_number_invert;
}

function igb_main_email_invert($atts)
{
$igb_main_email_invert = "<a class='primary-link-sm text-white hover:text-igb-grey-100'
    href='mailto:info@XXXX.com' target='_blank' rel='noopener noreferrer'>info@XXXX.com</a>";
return $igb_main_email_invert;
}


// ------------------------
//
// Shortcodes
// Will make editiable from wordpress admin when have time
//
// ------------------------

add_shortcode('igb_main_number', 'igb_main_number');
add_shortcode('igb_main_email', 'igb_main_email');
add_shortcode('igb_main_number_invert', 'igb_main_number_invert');
add_shortcode('igb_main_email_invert', 'igb_main_email_invert');
