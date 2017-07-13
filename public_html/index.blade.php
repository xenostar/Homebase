<!DOCTYPE html>
<html class="{{{ $route or Route::currentRouteName() }}}">
<head>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Website Name | @yield('title')</title>

	<meta name="description" content="Website description." />
	<meta name="author" content="Xenostar Studios" />
	<meta name="rating" content="general" />
	<meta name="robots" content="index, follow" />
	<meta name="content-language" content="english">
	<meta name="audience" content="all" />
@if(Route::currentRouteName() === "home")
	<meta property="og:site_name" content="Website Name">
	<meta property="og:title" content="Website Title">
	<meta property="og:type" content="website">
	<meta property="og:description" content="Website Description">
	<meta property="og:image" content="http://website.com/wp-content/themes/xenotheme_v2/assets/img/logo.png">
	<meta property="og:url" content="http://website.com/">
@endif

	<!-- Disables Scaling on multi-touch interfaces -->
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">

	<!-- Apple Touch Icon -->
	<link rel="apple-touch-icon" href="/assets/img/apple-touch-icon.png">

	<!-- CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ elixir("css/master.css") }}" />

	<!-- HTML5shiv, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="/libs/html5shiv/dist/html5shiv-printshiv.min.js"></script>
		<script src="/libs/REM-unit-polyfill/js/rem.min.js"></script>
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
			kitId: 'axg4srq',
			scriptTimeout: 3000,
			async: true
			},
			h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
		})(document);
	</script>

</head>
<body id="top" class="xeno">

	<section class="wrapper gut">

		<header>
			<div class="row">

				<div class="col_06">
					<h1 class="title">Homebase</h1>
				</div>

			</div>
		</header>
		<nav>
			<div class="row">

				<div class="col_02"><div class="pad">Navi</div></div>
				<div class="col_02"><div class="pad">Navi</div></div>
				<div class="col_02"><div class="pad">Navi</div></div>

			</div>
		</nav>
		<section class="main">
			<div class="row">

			<div class="col_06">
				<div class="content">07</div>
			</div>

			</div>
		</section>
		<footer>
			<div class="row">

				<div class="col_06"><div class="pad">Footer</div></div>

			</div>
		</footer>

	</section><!-- /wrapper -->

	<!-- Footer Scripts -->
	<script>
		// Scripts here
	</script>

	<!-- Load Frameworks -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="/libs/jquery/dist/jquery.min.js"><\/script>')</script>
	@yield('scripts')

	<!-- Start Application -->
	<script src="{{ elixir("js/app.js") }}"></script>

</body>
</html>
