<?php 
/*
Plugin Name: ALT Lab Full Size Video Embeds
Plugin URI:  https://github.com/
Description: For making videos responsive and full size automatically
Version:     1.0
Author:      ALT Lab
Author URI:  http://altlab.vcu.edu
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: my-toolset

*/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


add_action('wp_enqueue_scripts', 'prefix_load_scripts');

function prefix_load_scripts() {                           
    $deps = array('jquery');
    $version= '1.0'; 
    $in_footer = true;    
    wp_enqueue_script('alt-lab-full-size-video-main-js', plugin_dir_url( __FILE__) . 'js/alt-lab-full-size-video-main.js', $deps, $version, $in_footer); 
    wp_enqueue_style( 'alt-lab-full-size-video-main-css', plugin_dir_url( __FILE__) . 'css/alt-lab-full-size-video-main.css');
}