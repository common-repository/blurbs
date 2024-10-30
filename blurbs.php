<?php
/*
 Plugin Name: Blurbs
 Plugin URI: http://www.masseltech.com/
 Description: Allows snippets of text to be created which can later be pulled out anywhere on the site from a template or shorttag
 Version: 0.17
 Author: Jeremy Massel
 Author URI: http://www.masseltech.com/
 */
define("BLURBS_VERSION", 0.17);
require_once('requirements.php');

$blurbPlugin = new blurbPlugin();

add_action('admin_menu', array ($blurbPlugin, 'menuAction'));
add_action('init', array($blurbPlugin, 'initActions'));


//Add activation/deactivation
register_activation_hook( __FILE__ , array ($blurbPlugin, 'runInstall'));

add_shortcode('blurb', 'blurb_extractShortCodes');
?>
