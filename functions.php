<?php
/**
 * Theme Functions.
 *
 * @package Shimu
 */

if (! defined('SHIMU_DIR_PATH')) {
    define('SHIMU_DIR_PATH', untrailingslashit(get_template_directory()));
}

if (! defined('SHIMU_DIR_URL')) {
    define('SHIMU_DIR_URL', untrailingslashit(get_template_directory_uri()));
}

require_once SHIMU_DIR_PATH . '/inc/helpers/autoloader.php';

function shimu_get_theme_instance()
{
    \SHIMU_THEME\Inc\SHIMU_THEME::get_instance();
}

shimu_get_theme_instance();

function shimu_enqueue_scripts()
{

}
