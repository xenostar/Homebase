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
<script src="/wp-content/themes/xenotheme_v2/assets/libs/jquery/dist/jquery.min.js"></script>

<!-- Wordpress Footer -->
<?php wp_footer(); ?>

<!-- Start Application -->
<script src="/wp-content/themes/xenotheme_v2/assets/scripts/app.min.js"></script>

</body>
</html>
