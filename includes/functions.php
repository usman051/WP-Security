<?php

/**
 * includes 
 */

 add_action('wp_enqueue_scripts','urc_wp_enqueue_scripts_func');
 add_action('admin_enqueue_scripts','urc_wp_enqueue_scripts_func');

 function urc_wp_enqueue_scripts_func(){
    wp_enqueue_style('style',WP_DIR_PATH.'assets/style.css');
 }
 require_once('main-function.php');