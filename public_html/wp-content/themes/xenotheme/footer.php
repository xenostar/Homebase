<?php
    global $post;
    $slug = get_post( $post )->post_name;
?>
    <footer>
        <div class="row">
            <div class="col_04">
                <p>Footer Left</p>
            </div>
            <div class="col_02">
                <p>Footer Right</p>
            </div>
        </div>
    </footer>

</div><!-- /wrapper -->

<!-- Load Frameworks -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<!-- Wordpress Footer -->
<?php wp_footer(); ?>

<!-- Start Application -->
<script type="text/javascript" src="/wp-content/themes/xenotheme/assets/scripts/app.min.js"></script>

</body>
</html>
