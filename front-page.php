<?php get_header() ?>

<div class="container">
    <div class="row">
        <div class="col-lg-9 col-md-12">
            <?php get_template_part('includes/section', 'content') ?>
        </div>
        <?php if (is_active_sidebar('blog-sidebar')): ?>
            <div class="col-lg-3 col-md-12">
                <div class="sidebar">
                    <?php dynamic_sidebar('blog-sidebar'); ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php get_footer() ?>