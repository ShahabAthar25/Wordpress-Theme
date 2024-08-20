<div class="row">
    <?php if (have_posts()): while (have_posts()): the_post() ?>

            <div class="col-md-4 col-sm-12">
                <div class="card" style="width: 18rem;">
                    <?php if (has_post_thumbnail()): ?>
                        <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>" alt="Card image cap">
                    <?php endif; ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title() ?></h5>
                        <p class="card-text"><?php the_excerpt() ?></p>
                        <a href="<?php the_permalink() ?>" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>

    <?php endwhile;
    endif; ?>
</div>