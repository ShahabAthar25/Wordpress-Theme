<?php get_header() ?>

<div class="container">
    <div class="row">
        <div class="col-lg-9 col-md-12">
            <?php if (has_post_thumbnail()): ?>
                <div class="mb-5" style="background-color: #efefef;">
                    <img src="<?php the_post_thumbnail_url(); ?>" style="width: 100%; height: 350px; object-fit: contain;" alt="Card image cap">
                </div>
            <?php endif; ?>
            <h1 class="mb-5"><?php the_title() ?></h1>
            <p><?php the_content() ?></p>
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