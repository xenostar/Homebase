<?php
    global $post;
    $slug = get_post( $post )->post_name;
    // the_block( 'Sidebar Title', array(
    // 'type'          => 'one-liner',
    // 'apply_filters' => false,
    // ) );

    // the_block( 'Sidebar Content', array(
    // 'type'          => 'editor',
    // 'apply_filters' => true,
    // ) );
?>
				<div class="sidebar">
						<h2>Sidebar</h2>
						<p>Sidebar Content</p>
				</div>
