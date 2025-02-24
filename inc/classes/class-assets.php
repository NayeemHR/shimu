<?php

/**
 * Enqueue theme assets
 *
 * @package Shimu
 *
 */

namespace SHIMU_THEME\Inc;

use SHIMU_THEME\Inc\Traits\Singleton;

class Assets
{
    use Singleton;
    protected function __construct()
    {
        //load class
        $this->setup_hooks();
    }
    protected function setup_hooks()
    {
        // actions and filters
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }

    public function register_styles()
    {
        // CSS
        wp_enqueue_style('style', get_stylesheet_uri(), [], filemtime(SHIMU_DIR_PATH . '/style.css'), 'all');
        wp_register_style('main-css', get_template_directory_uri() . '/assets/css/main.css', [], filemtime(SHIMU_DIR_PATH . '/assets/css/main.css'), 'all');
        wp_enqueue_style('main-css');
        wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css', [], false, );

    }

    public function register_scripts()
    {
        //JS
        wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', [], filemtime(SHIMU_DIR_PATH . '/assets/js/main.js'), true);
        wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js', ['jquery'], false, true);
    }
}
