<?php

/*
Plugin Name: Scripts
Description: style
Version: 1.0
Author: flo
*/

if (!defined('ABSPATH')) {
    exit;
}

function Plugin_FrontBack_enqueue_styles()
{
    wp_enqueue_style('style', plugins_url('css/style.css', __FILE__));
}

function Plugin_FrontBack_enqueue_scripts()
{
    wp_enqueue_script('script', plugins_url('script/script.js', __FILE__), array('jquery'), '', true);
}

if (is_admin()) {
    add_action('admin_enqueue_scripts', 'Plugin_FrontBack_enqueue_scripts');
} else {
    add_action('wp_enqueue_scripts', 'Plugin_FrontBack_enqueue_styles');
}