<?php
/**
 * Plugin Name: Iqra Scroll Up
 * Description: Scroll to top j
 * Author: Kabir
 * Author URI: https://www.rezaun.com
 * Version: 1.0.0
 *
 */

/* Adding Latest jQuery from Wordpress */
function iqra_scroll_up_latest_jquery(){
    wp_enqueue_script('jquery');
}
add_action('admit_init','iqra_scroll_up_latest_jquery');

/*Some set-up*/
define('IQRA_PLUGIN_URL', WP_PLUGIN_URL . '/' . plugin_basename(dirname(__FILE__)) . '/');

wp_enqueue_script('iqra_jquery_easing',IQRA_PLUGIN_URL.'js/jquery.easing.js', array('jquery'));
wp_enqueue_script('iqra_jquery_scrollup',IQRA_PLUGIN_URL.'js/jquery.scrollUp.min.js', array('jquery'));
wp_enqueue_script('iqra_custom-js',IQRA_PLUGIN_URL.'js/script.js', array('jquery'));


wp_enqueue_style('style-css', IQRA_PLUGIN_URL. 'css/style.css');
