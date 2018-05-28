<?php
/**
 * Tyche functions and definitions.
 *
 * @link    https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Tyche
 */

/**
 * Start Tyche theme framework
 */
require_once 'inc/class-tyche-autoloader.php';
$tyche = new Tyche();

//Remove Sales Flash
add_filter('woocommerce_sale_flash', 'woo_custom_hide_sales_flash');
function woo_custom_hide_sales_flash()
{
    return false;
}

// remove hover zoom
function remove_image_zoom_support() {
    remove_theme_support( 'wc-product-gallery-zoom' );
}
add_action( 'after_setup_theme', 'remove_image_zoom_support', 100 );