<?php

function portfolio_view_child_enqueue_styles() {
    wp_enqueue_style(
        'portfolio-view-style',
        get_template_directory_uri() . '/style.css'
    );

    wp_enqueue_style(
        'child-style',
        get_stylesheet_uri(),
        ['portfolio-view-style']
    );
}

add_action('wp_enqueue_scripts', 'portfolio_view_child_enqueue_styles', 11);