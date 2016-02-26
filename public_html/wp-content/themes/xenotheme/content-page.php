    <header>
        <div class="row single">
            <div class="col_06">
                <h1>Header/Slider</h1>
            </div>
        </div>
    </header>
    <section class="main">
        <div class="row">

            <div class="col_04">
                <h2 class="title"><?php the_title(); ?></h2>
                <div class="content">
                    <?php the_post(); ?>
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="col_02">
<?php get_sidebar(); ?>
            </div>

        </div>
    </section>
