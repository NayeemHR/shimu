<?php
/**
 * Theme Functions.
 *
 * @package Shimu
 */

if (! defined('SHIMU_DIR_PATH')) {
    define('SHIMU_DIR_PATH', untrailingslashit(get_template_directory()));
}
require_once SHIMU_DIR_PATH . '/inc/helpers/autoloader.php';

function shimu_enqueue_scripts()
{
    // CSS
    wp_enqueue_style('style', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
    wp_register_style('main-css', get_template_directory_uri() . '/assets/css/main.css', [], filemtime(get_template_directory() . '/assets/css/main.css'), 'all');
    wp_enqueue_style('main-css');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', [], false, );

    //JS
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', [], filemtime(get_template_directory() . '/assets/js/main.js'), true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', ['jquery'], false, true);
}

add_action('wp_enqueue_scripts', 'shimu_enqueue_scripts');
