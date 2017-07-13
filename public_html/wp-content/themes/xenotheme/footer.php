<?php
global $post;
$slug = get_post( $post )->post_name;
?>
	<footer>
		<div class="row">
			<div class="col_06">

				<p>Footer Section</p>

			</div>
		</div>
	</footer>
</div><!-- /wrapper -->

<!-- Load Frameworks -->
<script src="<?php echo site_url(); ?>/wp-content/themes/xenotheme/assets/libs/jquery/dist/jquery.min.js"></script>

<!-- Wordpress Footer -->
<?php wp_footer(); ?>

<!-- Start Application -->
<script src="<?php echo site_url(); ?>/wp-content/themes/xenotheme/assets/scripts/app.min.js"></script>

</body>
</html>
