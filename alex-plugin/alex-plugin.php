<?php
/**
 * Plugin Name: AlexPlugin
 * Plugin URI: http://www.alexzivkovic.com/#
 * Description: WP Rocket Helper plugin hide notices.
 * Version: 1.0.2
 * Author: Aleksandar Zivkovic
 * Author URI: http://www.alexzivkovic.com
 */

//First we try to fix the file permissions only if the user has the correct group and owner settings. 

chmod("/wp-content/plugins/advanced-cache.php", 644);  
chmod("/.htaccess", 644); 

//If those were not ablet to run then we hide notices for htaccess file.

add_action('wp_loaded', 'wpalex_remove_hooks_htaccess');
function wpalex_remove_hooks_htaccess() {

	remove_action( 'admin_notices', 'rocket_warning_htaccess_permissions', 10 );
	
}

add_action('wp_loaded', 'wpalex_remove_hooks_advancedcache');
function wpalex_remove_hooks_advancedcache() {

	remove_action( 'admin_notices', 'rocket_warning_advanced_cache_permissions', 10 );
	
}

?>
