<?php
    global $post;
    $slug = get_post( $post )->post_name;
?>
<!doctype html>
<!--[if IE 6]>      <html class="<?php echo $slug; ?> ie6"> <![endif]-->
<!--[if IE 7]>      <html class="<?php echo $slug; ?> ie7"> <![endif]-->
<!--[if IE 8]>      <html class="<?php echo $slug; ?> ie8"> <![endif]-->
<!--[if IE 9]><!--> <html class="<?php echo $slug; ?> ie9"> <!--<![endif]-->
<head>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php bloginfo('name'); ?><?php if (wp_title('', false)) { echo ' | '; } ?><?php echo trim(wp_title('', false)); ?></title>

    <meta name="description" content="Site Description" />
    <meta name="author" content="Xenostar Studios" />
    <meta name="keywords" content="key, words, here" />
    <meta name="rating" content="general" />
    <meta name="robots" content="noindex, nofollow" />
    <meta name="content-language" content="english">
    <meta name="audience" content="all" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://website.com/" />
    <meta property="og:image" content="http://website.com/assets/img/og.png" />
    <meta property="og:title" content="Website Name" />
    <meta property="og:description" content="Business description" />
    <meta property="og:street-address" content="Business Location" />
    <meta property="og:locality" content="Location" />
    <meta property="og:region" content="State" />
    <meta property="og:postal-code" content="Zip" />
    <meta property="og:country-name" content="Country" />
    <meta property="og:email" content="email@website.com" />
    <meta property="og:phone_number" content="555-555-5555" />

    <!-- Wordpress Header START -->
<?php wp_head(); ?>

    <!-- Wordpress Header END -->

    <!-- Disables Scaling on multi-touch interfaces -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">

    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" href="/wp-content/themes/xenotheme/assets/img/apple-touch-icon.png">

    <!-- CSS -->
    <link rel="stylesheet" href="/wp-content/themes/xenotheme/assets/libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/wp-content/themes/xenotheme/assets/css/master.min.css" />

    <!-- HTML5shiv, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="/wp-content/themes/xenotheme/assets/libs/html5shiv/dist/html5shiv-printshiv.min.js"></script>
        <script src="/wp-content/themes/xenotheme/assets/libs/REM-unit-polyfill/js/rem.min.js"></script>
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
          kitId: '',
          scriptTimeout: 3000,
          async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
        })(document);
    </script>

</head>
<body id="top">

<div class="mobile-btn">
    <div></div>
    <div></div>
    <div></div>
</div>
<div class="mobile-nav">
    <div class="logo">
        <h2>Navigation<i class="fa fa-times close-btn"></i></h2>
    </div>
    <a href="/"<?php if($slug == "home"){ ?> class="active"<?php } ?>>Home</a>
    <a href="/about"<?php if($slug == "about"){ ?> class="active"<?php } ?>>About Us</a>
    <a href="/contact"<?php if($slug == "contact"){ ?> class="active"<?php } ?>>Contact</a>
</div>
<div class="mobile-overlay"></div>

<div class="wrapper">

    <nav class="mobi">
        <div class="row">
            <div class="col_06">
                <p>Mobile navigation (Usually just a logo)</p>
            </div>
        </div>
    </nav>
    <nav class="full">
        <div class="row">
            <div class="col_06">
                <p>Desktop navigation + Logo</p>
            </div>
        </div>
    </nav>
