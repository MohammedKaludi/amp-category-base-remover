<?php
// If uninstall not called from WordPress, then exit
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

remove_filter('category_rewrite_rules', 'ampforwp_remove_category_url_rewrite_rules');
global $wp_rewrite;
$wp_rewrite->flush_rules();
