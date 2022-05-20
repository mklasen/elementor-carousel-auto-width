<?php
/**
 * Plugin Name:       Elementor Carousel Auto Width
 * Plugin URI:        https://mklasen.com/plugins/elementor-carousel-auto-width/
 * Description:       Add the auto-width class to your Elementor Image Carousels to activate this plugin
 * Version:           1.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Marinus Klasen
 * Author URI:        https://mklasen.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://mklasen.com/plugins/elementor-carousel-auto-width/
 * Text Domain:       elementor-carousel-auto-width
 */


require 'includes/plugin-update-checker/plugin-update-checker.php';

$update_check = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/mklasen/elementor-carousel-auto-width',
	__FILE__,
	'elementor-carousel-auto-width'
);

$update_check->setBranch( 'master' );

add_action(
	'wp_enqueue_scripts',
	function() {
		wp_enqueue_script( 'elementor-customize-carousel-auto-width', plugin_dir_url( __FILE__ ) . 'js/customize-carousels.js', array( 'elementor-frontend' ), false, true );
		wp_enqueue_style( 'elementor-customize-carousel-auto-width', plugin_dir_url( __FILE__ ) . 'css/customize-carousels.css', );
	},
	99
);
