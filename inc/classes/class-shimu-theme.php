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
        Assets::get_instance();
        Menus::get_instance();
        $this->setup_hooks();
    }
    protected function setup_hooks()
    {
        // actions and filters
        add_action('after_setup_theme', [$this, 'setup_theme']);
    }

    public function setup_theme()
    {
        add_theme_support('title-tag');
        add_theme_support('custom-logo', [
            'header-text' => ['site-title', 'site-description'],
            'height'      => 100,
            'width'       => 400,
            'flex-height' => true,
            'flex-width'  => true,
        ]);
        $args = [
            'default-color' => '0000ff',
            'default-image' => get_template_directory_uri() . '/assets/img/bg.jpg',
        ];
        add_theme_support('custom-background', $args);
        add_theme_support('post-thumbnails');
        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support('automatic-feed-links');

        add_theme_support('html5', [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'script',
            'style',
        ]);

        add_editor_style();

        add_theme_support('wp-block-styles');
        add_theme_support('align-wede');
        add_theme_support('menus');
        global $content_width;
        if (! isset($content_width)) {
            $content_width = 1240;
        }

    }

}
