<?php get_header(); ?>
	<header class="xeno-h small">
		<div class="row">
			<div class="col_06">

				<h1>Blog Home</h1>

			</div>
		</div>
	</header>
	<section class="main">
		<div class="row">
			<div class="col_04">

				<div class="content">
<?php while ( have_posts() ) : the_post(); ?>
					<h2 class="blog_title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title('',''); ?></a></h2>
<?php the_content(); ?>
					<p class="postby">Posted on <?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?>.</p>
					<p class="postmetadata">Posted in: <?php the_category(', '); ?></p>
<?php endwhile; ?>
				</div>

			</div>
			<div class="col_02">

<?php get_sidebar(); ?>

			</div>
		</div>
	</section>
<?php get_footer(); ?>
