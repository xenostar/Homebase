<?php

show_admin_bar( false );

register_sidebar( array(
    'id'          => 'blog-sidebar',
    'name'        => __( 'Blog Sidebar', $text_domain ),
    'description' => __( 'This sidebar is located next to each blog post.', $text_domain ),
) );
