<?php
/**
 * Bootstraps the Theme
 *
 * @package Shimu
 */

namespace SHIMU_THEME\Inc;

use SHIMU_THEME\Inc\Traits\Singleton;

class SHIMU_THEME
{
    use Singleton;
    protected function __construct()
    {
        //load class
        wp_die('hello');
        $this->set_hooks();
    }
    protected function set_hooks()
    {
        // actions and filters
    }
}
