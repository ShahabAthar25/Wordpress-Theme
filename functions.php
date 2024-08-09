<?php

function load_css()
{
    wp_enqueue_style('styles', get_template_directory_uri() . '/style.css', array("bootstrap_grid"), true, 'all');
    wp_enqueue_style('bootstrap_grid', get_template_directory_uri() . '/css/bootstrap-grid.css', array(), true, 'all');
};


add_action('wp_enqueue_scripts', 'load_css');
