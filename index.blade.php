<!DOCTYPE html>
<!--[if IE 6]>      <html class="{{{ $route or Route::currentRouteName() }}} ie6"> <![endif]-->
<!--[if IE 7]>      <html class="{{{ $route or Route::currentRouteName() }}} ie7"> <![endif]-->
<!--[if IE 8]>      <html class="{{{ $route or Route::currentRouteName() }}} ie8"> <![endif]-->
<!--[if IE 9]><!--> <html class="{{{ $route or Route::currentRouteName() }}} ie9"> <!--<![endif]-->
<head>

    <meta charset="utf-8" />
    <link rel="dns-prefetch" href="//ajax.googleapis.com" /><!-- Grabs repo files quicker -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><!-- This + conditionals above destroy edge detection issues -->
    <meta http-equiv="imagetoolbar" content="false" /><!-- Kills IE6 Image toolbar -->

    <title>Xenostar Studios | @yield('title')</title>

    <meta name="description" content="@yield('description-dev')" />
    <meta name="author" content="Xenostar Studios" />
    <meta name="keywords" content="@yield('keywords-dev')" />
    <meta name="rating" content="general" />
    <meta name="robots" content="noindex, nofollow" />
    <meta name="content-language" content="english">
    <meta name="audience" content="all" />
@if(Route::currentRouteName() === "home")
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://xenostar.net/" />
    <meta property="og:image" content="http://xenostar/assets/img/xeno-og.png" />
    <meta property="og:title" content="Website description here." />
    <meta property="og:description" content="Google search website description here." />
    <meta property="og:street-address" content="Company Address" />
    <meta property="og:locality" content="Company City" />
    <meta property="og:region" content="IN" />
    <meta property="og:postal-code" content="47901" />
    <meta property="og:country-name" content="USA" />
    <meta property="og:email" content="email@xenostar.net" />
    <meta property="og:phone_number" content="555-555-5555" />
@endif

    <!-- Disables Scaling on multi-touch interfaces -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">

    <!-- Favicon -->
    <link type="image/png" rel="icon" href="/assets/img/favicon.ico" />

    <!-- CSS -->
    <link type="text/css" rel="stylesheet" href="/assets/css/master.min.css" />

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Load Inline Scripts -->
    <script>
        function sizeBanner(mod){
            var h = Math.max(Math.round(document.documentElement.clientHeight * mod), Math.round(window.innerHeight * mod) || 0);
            try { document.querySelector(".banner").style.height = h + "px"; }catch(error){}
        };
        function imgLoaded(img){
            img.parentNode.className += ' loaded';
        };
        var imagePreload = [
            //'/uploads/hero_about.jpg',
        ];
        (function(d) {
            var config = {
                kitId: 'vtk3lxs',
                scriptTimeout: 3000
            },
            h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='//use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
        })(document);
    </script>

</head>
<body id="top">
<div class="wrapper gut-side">

    <div class="section" id="head">
        <div class="row">
            <div class="col_06">
                <h1>Page Title</h1>
            </div>
        </div>
    </div>
    <div class="section" id="cont">
        <div class="row">
            <div class="col_06">
                <p>Content text.</p>
            </div>
        </div>
        <div class="row">
            <div class="col_03">
                <p>Content text.</p>
            </div>
            <div class="col_03">
                <p>Content text.</p>
            </div>
        </div>
    </div>
    <div class="section" id="foot">
        <div class="row">
            <div class="col_06">
                <p>Footer text.</p>
            </div>
        </div>
    </div>

</div><!-- /wrapper -->

<!-- Custom Scripts -->
<script>
    sizeBanner(@if(Route::currentRouteName() === 'home' || Route::currentRouteName() === 'test') 1.0 @elseif(Route::currentRouteName() === 'newspage') 0.5 @else 0.8 @endif);
</script>

<!-- Load Frameworks -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
@yield('scripts')

<!-- Start Application -->
<script type="text/javascript" src="/assets/scripts/app.min.js"></script>

</body>
</html>