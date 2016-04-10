<?php

function webconResources() {
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'webconResources');

register_nav_menus(array(
    'primary' => __('Head Menu'),
    'footer' => __('Footer Menu')
));