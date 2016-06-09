<?php
/* -------------------------------------------------------------------------------------------------
////////////////////////////////////////////////////////////////////////////////////////////////////
Template - index.php
////////////////////////////////////////////////////////////////////////////////////////////////////
------------------------------------------------------------------------------------------------- */
// Header
get_header();

// Content
if(have_posts())
{

    if(is_front_page())
    {
        get_template_part('content-front');
    }
    elseif(is_home() || is_archive())
    {
        get_template_part('content-archive');
    }
    elseif(is_singular())
    {
        if(is_page())
        {
            get_template_part('content-page');
        }
        elseif(is_single())
        {
            get_template_part('content-single');
        }
    }
}
else
{
    get_template_part('content-404');
}

// Footer
get_footer();
