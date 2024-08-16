<?php get_header() ?>

<div class="container">
    <?php if (the_post()): while (the_post()): the_post() ?>
    <?php endwhile;
    endif ?>
</div>

<?php get_footer() ?>