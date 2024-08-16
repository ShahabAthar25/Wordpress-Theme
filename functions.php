<?php


// Load CSS

function load_css()
{
    wp_enqueue_style('styles', get_template_directory_uri() . '/style.css', array("bootstrap"), true, 'all');
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.css', array(), true, 'all');
};

add_action('wp_enqueue_scripts', 'load_css');


// Load JS

function load_js()
{
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), false, true);
}

add_action('wp_enqueue_scripts', 'load_js');


// Theme Supports

add_theme_support('menus');


// Menus

register_nav_menus(

    array(

        'navbar' => 'Navbar',
        'mobile-navbar' => 'Mobile Navbar',

    )

);


function add_additional_class_on_li($classes, $item, $args)
{
    if (isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


// Function to add a class to the <a> element
function add_additional_class_on_a($atts, $item, $args)
{
    if (isset($args->add_a_class)) {
        $atts['class'] = isset($atts['class']) ? $atts['class'] . ' ' . $args->add_a_class : $args->add_a_class;
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 10, 3);
