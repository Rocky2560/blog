<?php

if (!function_exists('lancr_setup')) :

    add_action('after_setup_theme', 'lancr_setup');

    /**
     * Global functions
     */
    function lancr_setup() {
    
        add_theme_support('post-thumbnails');
        add_image_size('lancr-home', 400, 400, true);

    }

endif;

if (!function_exists('lancr_post_thumbnail_size')) :

    function lancr_post_thumbnail_size($size) {

        if ( 'post-thumbnail' === $size  && (is_home() || is_archive())) {
      		$size = 'lancr-home'; // change size to lancr-home on blog feed pages, if no image size set
      	}
      	return $size;
    }

    add_filter('post_thumbnail_size', 'lancr_post_thumbnail_size');

endif;

if (!function_exists('lancr_excerpt_length')) :

    /**
     * Excerpt limit.
     */
    function lancr_excerpt_length($length) {
        return 25;
    }

    add_filter('excerpt_length', 'lancr_excerpt_length', 999);

endif;

if ( !function_exists( 'lancr_envo_extra_is_activated' ) ) {

	/**
	 * Query Lupr extra activation
	 */
	function lancr_envo_extra_is_activated() {
		return defined( 'ENVO_EXTRA_CURRENT_VERSION' ) ? true : false;
	}

}

/**
 * Register Theme Info Page
 */
require_once( trailingslashit(get_template_directory()) . 'lib/lancr-dashboard.php' );
if ( is_admin() ) {
	require_once( trailingslashit( get_template_directory() ) . 'lib/lancr-plugin-install.php' );
}

/**
 * Customizer options
 */
require_once( trailingslashit(get_template_directory()) . 'lib/customizer-recommend.php' );