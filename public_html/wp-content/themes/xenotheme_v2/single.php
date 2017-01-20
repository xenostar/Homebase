<?php get_header(); ?>
	<header class="xeno-h small">
		<div class="row">
			<div class="col_06">

				<h1>Blog Single</h1>

			</div>
		</div>
	</header>
	<section class="main">
		<div class="row">
			<div class="col_04">

				<div class="content">
					<h2 class="blog_title"><?php the_title(); ?></h2>
<?php the_post(); ?>
<?php the_content(); ?>
					<p class="postby">Posted on <?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?>.</p>
					<p class="postmetadata">Posted in: <?php the_category(', '); ?></p>
				</div>

			</div>
			<div class="col_02">

<?php get_sidebar(); ?>

			</div>
		</div>
	</section>
<?php get_footer(); ?>
