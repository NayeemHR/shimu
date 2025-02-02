<?php
/**
 * Theme Functions.
 *
 * @package Shimu
 */

function shimu_enqueue_scripts()
{

    wp_enqueue_style('style', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', [], filemtime(get_template_directory() . '/assets/js/main.js'), true);

    wp_register_style('main-css', get_template_directory_uri() . '/assets/css/main.css', [], filemtime(get_template_directory() . '/assets/css/main.css'), 'all');

    wp_enqueue_style('main-css');
}

add_action('wp_enqueue_scripts', 'shimu_enqueue_scripts');
