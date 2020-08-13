<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt Fix for Garden Gnome Package
 * Plugin URI:        https://www.kntnt.com/
 * Description:       Removes empty lines from the JavaScript outputted by the shortcode of Garden Gnome Package viewer to prevent wpautop to mess with it.
 * Version:           1.0.0
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */

defined( 'ABSPATH' ) || die;

add_action( 'plugins_loaded', function () {
    global $shortcode_tags;
    $callback = $shortcode_tags['ggpkg'];
    $shortcode_tags['ggpkg'] = function ( $attributes ) use ( $callback ) {
        return preg_replace( '/^(?:[\t ]*(?:\r?\n|\r))+/m', '', $callback( $attributes ) );
    };
} );
