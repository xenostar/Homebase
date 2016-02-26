    <section class="banner mini">
        <div class="row">
            <div class="col_06">
                <h2><?php the_title('',''); ?></h2>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">

            <div class="col_04">
                <?php the_post(); ?>
                <?php the_content(); ?>
                <p class="postby">Posted on <?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?>.</p>
                <p class="postmetadata">Posted in: <?php the_category(', '); ?></p>
            </div>
            <div class="col_02">
<?php get_sidebar(); ?>
            </div>

        </div>
    </section>
