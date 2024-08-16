<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>

    <?php wp_head(); ?>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin-bottom: 40px;">
        <div class="container">
            <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
                <h3><?php echo get_bloginfo('name'); ?></h3>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <?php wp_nav_menu(

                    array(

                        'theme_location' => 'navbar',
                        'menu_class' => 'navbar-nav',
                        'add_li_class'  => 'nav-item',
                        'add_a_class' => 'nav-link'

                    )

                ); ?>
            </div>
            <?php get_search_form() ?>
        </div>
    </nav>