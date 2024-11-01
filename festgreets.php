<?php

/*
Plugin Name: WP FestGreets
Plugin URI: http://www.wordpress.org/plugins/wp-festgreets
Description: Greet your readers with exciting animated GIFs on your website, anywhere placed decoratively in theme!
Version: 1.1
Author: Yogita Patil
Author URI: http://twitter.com/yogyyata
License: GPL2
*/

/*Importion*/
define( 'IMPORT_FILE', plugin_dir_path( __FILE__ ) );
require( IMPORT_FILE . 'register_post_type.php');
require( IMPORT_FILE . 'new_metaboxes.php');
require( IMPORT_FILE . 'frontend-call.php');
require( IMPORT_FILE . 'settings-page.php');

function iq_festgreets_enqueue_scripts(){
    global $pagenow, $typenow;
    if ( (($pagenow == 'post.php') || ($pagenow == 'post-new.php')) && $typenow == 'festgreets' ){
           wp_enqueue_script( 'festgreets_js' , plugins_url( 'js/admin-festgreets.js' , __FILE__ ), array( 'jquery', 'jquery-ui-datepicker' ), '100', true );
           wp_enqueue_style( 'festgreets_datepicker_style' , plugins_url( 'css/jquery-datepicker.css' , __FILE__ ) );
           wp_enqueue_style( 'festgreets_css', plugins_url( 'css/admin-festgreets.css' , __FILE__ ) );
    }
}
add_action( 'admin_enqueue_scripts' , 'iq_festgreets_enqueue_scripts' );
add_filter('widget_text','do_shortcode');

?>
