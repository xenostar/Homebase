<?php
/* -------------------------------------------------------------------------------------------------
////////////////////////////////////////////////////////////////////////////////////////////////////
Template - index.php
////////////////////////////////////////////////////////////////////////////////////////////////////
------------------------------------------------------------------------------------------------- */
if(have_posts())
{
    get_header();
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
    get_footer();
}
else
{
    get_template_part('content-404');
}
