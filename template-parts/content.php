<?php
/**
 * Content Template
 *
 * @package shimu
 */

the_title('<h2><a href="' . esc_url(get_permalink()) . '">', '</a></h2>');
the_excerpt();
