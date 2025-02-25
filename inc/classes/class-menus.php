<?php

/**
 * Register Menus
 *
 * @package Shimu
 *
 */

namespace SHIMU_THEME\Inc;

use SHIMU_THEME\Inc\Traits\Singleton;

class Menus
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
        add_action('init', [$this, 'register_menus']);
    }
    public function register_menus()
    {
        register_nav_menus([
            'shimu-header-menu' => esc_html__('Header Menu', 'shimu'),
            'ahimu-footer-menu' => esc_html__('Footer Menu', 'shimu'),
        ]);
    }

}
