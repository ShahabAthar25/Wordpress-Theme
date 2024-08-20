<?php


// Load CSS

function load_css()
{
    wp_enqueue_style('styles', get_stylesheet_uri(), array("bootstrap"), true, 'all');
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.css', array(), true, 'all');
};

add_action('wp_enqueue_scripts', 'load_css');


// Load JS

function load_js()
{
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), false, true);
}

add_action('wp_enqueue_scripts', 'load_js');


// Updating permalinks

function change_permalinks()
{
    global $wp_rewrite;
    $wp_rewrite->set_permalink_structure('/%postname%/');
    $wp_rewrite->flush_rules();
}
add_action('init', 'change_permalinks');

// Theme Supports

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');


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


// Sidebars

function register_home_sidebar()
{
    register_sidebar(

        array(

            'name' => 'Blog Sidebar',
            'id' => 'blog-sidebar',
            'before_title' => '<h4 class="font-weight-bold">',
            'after_title' => '</h4>'

        ),

    );
};

add_action('widgets_init', 'register_home_sidebar');
