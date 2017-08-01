<!doctype html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->

	<head>
		<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Favicon
		============================================ -->
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
		
		<!-- FONTS
		============================================ -->	
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'> 
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Bitter:400,700,400italic&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
				
		<!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="{{ URL::asset('/fe/css/animate.css') }}">
		
		<!-- FANCYBOX CSS
		============================================ -->			
        <link rel="stylesheet" href="{{ URL::asset('/fe/css/jquery.fancybox.css') }}">
		
		<!-- BXSLIDER CSS
		============================================ -->			
        <link rel="stylesheet" href="{{ URL::asset('/fe/css/jquery.bxslider.css') }}">			
				
		<!-- MEANMENU CSS
		============================================ -->			
        <link rel="stylesheet" href="{{ URL::asset('/fe/css/meanmenu.min.css') }}">	
		
		<!-- JQUERY-UI-SLIDER CSS
		============================================ -->			
        <link rel="stylesheet" href="{{ URL::asset('/fe/css/jquery-ui-slider.css') }}">		
		
		<!-- NIVO SLIDER CSS
		============================================ -->			
        <link rel="stylesheet" href="{{ URL::asset('/fe/css/nivo-slider.css') }}">
		
		<!-- OWL CAROUSEL CSS 	
		============================================ -->	
        <link rel="stylesheet" href="{{ URL::asset('/fe/css/owl.carousel.css') }}">
		
		<!-- OWL CAROUSEL THEME CSS 	
		============================================ -->	
         <link rel="stylesheet" href="{{ URL::asset('/fe/css/owl.theme.css') }}">
		
		<!-- BOOTSTRAP CSS 
		============================================ -->	
        <link rel="stylesheet" href="{{ URL::asset('/fe/css/bootstrap.min.css') }}">
		
		<!-- FONT AWESOME CSS 
		============================================ -->
        <link rel="stylesheet" href="{{ URL::asset('/fe/css/font-awesome.min.css') }}">
		
		<!-- NORMALIZE CSS 
		============================================ -->
        <link rel="stylesheet" href="{{ URL::asset('/fe/css/normalize.css') }}">
		
		<!-- MAIN CSS 
		============================================ -->
        <link rel="stylesheet" href="{{ URL::asset('/fe/css/main.css') }}">
		
		<!-- STYLE CSS 
		============================================ -->
        <link rel="stylesheet" href="{{ URL::asset('/fe/css/style.css') }}">
		
		<!-- RESPONSIVE CSS 
		============================================ -->
        <link rel="stylesheet" href="{{ URL::asset('/fe/css/main.css') }}">
		
		<!-- IE CSS 
		============================================ -->
        <link rel="stylesheet" href="{{ URL::asset('/fe/css/ie.css') }}">
		
		<!-- MODERNIZR JS 
		============================================ -->
        <script src="{{ URL::asset('/fe/js/vendor/modernizr-2.6.2.min.js') }}"></script>
	</head>
	<body>
		@include('fe/blocks/header-top')
        @include('fe/blocks/header-middle')
		@include('fe/blocks/nav')
		@yield('content')
		@include('fe/blocks/brand-client-area')
		@include('fe/blocks/company-facality')
		@include('fe/blocks/footer-top-area')
		@include('fe/blocks/footer')
		<script src="{{ URL::asset('/fe/js/vendor/jquery-1.11.3.min.js') }}"></script>
		<script src="{{ URL::asset('/fe/js/jquery.fancybox.js') }}"></script>
		<script src="{{ URL::asset('/fe/js/jquery.fancybox.js') }}"></script>
		<script src="{{ URL::asset('/fe/js/jquery.bxslider.min.js') }}"></script>
		<script src="{{ URL::asset('/fe/js/jquery.meanmenu.js') }}"></script>
		<script src="{{ URL::asset('/fe/js/owl.carousel.min.js') }}"></script>
		<script src="{{ URL::asset('/fe/js/jquery.nivo.slider.js') }}"></script>
		<script src="{{ URL::asset('/fe/js/jqueryui.js') }}"></script>
		<script src="{{ URL::asset('/fe/js/bootstrap.min.js') }}"></script>
		<script src="{{ URL::asset('/fe/js/wow.js') }}"></script>
		<script>
			new WOW().init();
		</script>
		<script src="{{ URL::asset('/fe/js/main.js') }}"></script>
	</body>
