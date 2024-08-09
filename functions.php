<?php

function load_css()
{
    wp_enqueue_style('bootstrap_grid', get_template_directory_uri() . '/css/bootstrap-grid.min.css', array(), false, 'all');
};


add_action('wp_head', 'load_css');
