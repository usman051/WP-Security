<?php
/*
Plugin Name: WP Security
Plugin URI: https://github.com/MuhammadUsman0304/wp-security.git
Description: Plugin to enhance WP security 
Version: 1.0.0
Author: Muhammad Usman
Tags: wp security, security, enable/disable xmlrpc, xmlrpc, comments, turn off comments, 
Author URI: https://www.linkedin.com/in/muhammad-usman-b3439218b/
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

defined('ABSPATH') || die('you can\'t call me directly');
define('WP_DIR_PATH', plugin_dir_url(__FILE__).'/');
define('WP_SECURITY_VER','1.0.0');

// add menu in dashboard

function urc_add_admin_menu_func(){
   add_options_page('WP Security', 'WP Security','manage_options','wp-security','urc_wp_security_init');
}
add_action('admin_menu','urc_add_admin_menu_func');

require_once('includes/functions.php');
