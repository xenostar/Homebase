<?php
    global $post;
    $slug = get_post( $post )->post_name;
?>
                <h2 class="title-sidebar">
                    Sidebar
<?php
// the_block( 'Sidebar Title', array(
// 'type'          => 'one-liner',
// 'apply_filters' => false,
// ) );
?>
                </h2>
                <div class="sidebar">
                    <p>Sidebar Content area</p>
<?php
// the_block( 'Sidebar Content', array(
// 'type'          => 'editor',
// 'apply_filters' => true,
// ) );
?>
                </div>
