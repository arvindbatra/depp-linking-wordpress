<?php
/*
Plugin Name: Deep-Linking
Plugin URI: https://blog.eventshigh.com/
Version:  0.1
Author: Arvind Batra
Description: Adds deep links to blog post headers
*/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );



function add_deep_link() {
        if (is_single()) {
                $link = get_permalink( $id );
                $link = str_replace("https://", "", $link);
                $link = str_replace("http://", "", $link)       ;
                echo '<link rel="alternate" href="android-app://com.eventshigh.nearme.app/http/' . $link . '" />';
        }
}


add_action('wp_head', 'add_deep_link');
?>
