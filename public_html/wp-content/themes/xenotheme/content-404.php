<!doctype html>
<!--[if IE 6]>      <html class="error_page ie6"> <![endif]-->
<!--[if IE 7]>      <html class="error_page ie7"> <![endif]-->
<!--[if IE 8]>      <html class="error_page ie8"> <![endif]-->
<!--[if IE 9]><!--> <html class="error_page ie9"> <!--<![endif]-->
<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php bloginfo('name'); ?><?php if (wp_title('', false)) { echo ' | '; } ?><?php echo trim(wp_title('', false)); ?></title>

    <meta name="author" content="Xenostar Studios" />
    <meta name="rating" content="general" />
    <meta name="robots" content="noindex, nofollow" />
    <meta name="content-language" content="english">
    <meta name="audience" content="all" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://website.com/" />
    <meta property="og:image" content="http://website.com/assets/img/og.png" />
    <meta property="og:title" content="Archibald Memorial Home" />
    <meta property="og:description" content="AMH Location" />
    <meta property="og:street-address" content="Business Location" />
    <meta property="og:locality" content="Indianapolis" />
    <meta property="og:region" content="Indiana" />
    <meta property="og:postal-code" content="46055" />
    <meta property="og:country-name" content="USA" />
    <meta property="og:email" content="email@email.com" />
    <meta property="og:phone_number" content="555-555-5555" />

    <!-- Wordpress Header START -->
<?php wp_head(); ?>
    <!-- Wordpress Header END -->

    <!-- Disables Scaling on multi-touch interfaces -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">

    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" href="/assets/img/apple-touch-icon.png">

    <!-- CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/wp-content/themes/xenotheme_v2/assets/css/master.min.css" />

    <!-- HTML5shiv, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="/assets/libs/html5shiv/dist/html5shiv-printshiv.min.js"></script>
        <script src="/assets/libs/REM-unit-polyfill/js/rem.min.js"></script>
    <![endif]-->

    <!-- Header Scripts -->
    <script>
        function imgLoaded(img){
            img.parentNode.className += ' loaded';
        };
        var imagePreload = [
            //'/uploads/hero_about.jpg',
        ];
        (function(d) {
        var config = {
          kitId: 'hef8jon',
          scriptTimeout: 3000,
          async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
        })(document);
    </script>

</head>
<body id="top">
<div class="wrapper">

    <section class="main error_page">
        <div class="row">

            <div class="col_06">
                <h1>404</h1>
                <h2>The page you are looking for cannot be found.</h2>
                <div class="content">
                    <p>Return to <a href="/">Home</a>.</p>
                </div>
            </div>

        </div>
    </section>

</div><!-- /wrapper -->

<!-- Load Frameworks -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<!-- Wordpress Footer -->
<?php wp_footer(); ?>

<!-- Start Application -->
<script type="text/javascript" src="/wp-content/themes/xenotheme_v2/assets/scripts/app.min.js"></script>

</body>
</html>
