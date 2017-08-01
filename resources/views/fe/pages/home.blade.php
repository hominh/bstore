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
		 <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        @include('fe/blocks/header-top')
        @include('fe/blocks/header-middle')
		@include('fe/blocks/nav')
		
		<section class="main-content-section">
			<div class="container">
				<div class="row">
					<div class="main-slider-area">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
							<div class="slider-area">
								<div id="wrapper">
									<div class="slider-wrapper">
										<div id="mainSlider" class="nivoSlider">
											<img src="img/slider/2.jpg" alt="main slider" title="#htmlcaption"/>
											<img src="img/slider/1.jpg" alt="main slider" title="#htmlcaption2"/>
										</div>
										<div id="htmlcaption" class="nivo-html-caption slider-caption">
											<div class="slider-progress"></div>
											<div class="slider-cap-text slider-text1">
												<div class="d-table-cell">
													<h2 class="animated bounceInDown">BEST THEMES</h2>
													<p class="animated bounceInUp">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod ut laoreet dolore magna aliquam erat volutpat.</p>	
													<a class="wow zoomInDown" data-wow-duration="1s" data-wow-delay="1s" href="#">Read More <i class="fa fa-caret-right"></i></a>													
												</div>
											</div>
										</div>
										<div id="htmlcaption2" class="nivo-html-caption slider-caption">
											<div class="slider-progress"></div>
											<div class="slider-cap-text slider-text2">
												<div class="d-table-cell">
													<h2 class="animated bounceInDown">BEST THEMES</h2>
													<p class="animated bounceInUp">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod ut laoreet dolore magna aliquam erat volutpat.</p>	
													<a class="wow zoomInDown" data-wow-duration="1s" data-wow-delay="1s" href="#">Read More <i class="fa fa-caret-right"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<div class="slider-right zoom-img m-top">
								<a href="#"><img class="img-responsive" src="img/product/cms11.jpg" alt="sidebar left" /></a>
							</div>
						</div>
					</div>
				</div>
				<div class="row tow-column-product">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="new-product-area">
							<div class="left-title-area">
								<h2 class="left-title">New Products</h2>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<div class="row">
										<div class="new-pro-carousel">
											<div class="item">
												<div class="new-product">
													<div class="single-product-item">
														<div class="product-image">
															<a href="#"><img src="img/product/sale/8.jpg" alt="product-image" /></a>
															<a href="#" class="new-mark-box">new</a>
															<div class="overlay-content">
																<ul>
																	<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
																	<li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
																	<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
																	<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
																</ul>
															</div>
														</div>
														<div class="product-info">
															<div class="customar-comments-box">
																<div class="rating-box">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-half-empty"></i>
																	<i class="fa fa-star-half-empty"></i>
																</div>
																<div class="review-box">
																	<span>1 Review (s)</span>
																</div>
															</div>
															<a href="single-product.html">Printed Dress</a>
															<div class="price-box">
																<span class="price">$26.00</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="new-product">
													<div class="single-product-item">
														<div class="product-image">
															<a href="#"><img src="img/product/sale/8.jpg" alt="product-image" /></a>
															<a href="#" class="new-mark-box">new</a>
															<div class="overlay-content">
																<ul>
																	<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
																	<li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
																	<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
																	<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
																</ul>
															</div>
														</div>
														<div class="product-info">
															<div class="customar-comments-box">
																<div class="rating-box">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-half-empty"></i>
																	<i class="fa fa-star-half-empty"></i>
																</div>
																<div class="review-box">
																	<span>1 Review (s)</span>
																</div>
															</div>
															<a href="single-product.html">Printed Dress</a>
															<div class="price-box">
																<span class="price">$26.00</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="new-product">
													<div class="single-product-item">
														<div class="product-image">
															<a href="#"><img src="img/product/sale/8.jpg" alt="product-image" /></a>
															<a href="#" class="new-mark-box">new</a>
															<div class="overlay-content">
																<ul>
																	<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
																	<li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
																	<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
																	<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
																</ul>
															</div>
														</div>
														<div class="product-info">
															<div class="customar-comments-box">
																<div class="rating-box">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-half-empty"></i>
																	<i class="fa fa-star-half-empty"></i>
																</div>
																<div class="review-box">
																	<span>1 Review (s)</span>
																</div>
															</div>
															<a href="single-product.html">Printed Dress</a>
															<div class="price-box">
																<span class="price">$26.00</span>
															</div>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="Sale-Products">
							<div class="left-title-area">
								<h2 class="left-title">Sale Products</h2>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<div class="row">
										<div class="sale-carousel">
											<div class="item">
												<div class="new-product">
													<div class="single-product-item">
														<div class="product-image">
															<a href="#"><img src="img/product/sale/12.jpg" alt="product-image" /></a>
															<a href="#" class="new-mark-box">new</a>
															<div class="overlay-content">
																<ul>
																	<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
																	<li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
																	<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
																	<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
																</ul>
															</div>
														</div>
														<div class="product-info">
															<div class="customar-comments-box">
																<div class="rating-box">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-half-empty"></i>
																	<i class="fa fa-star-half-empty"></i>
																</div>
																<div class="review-box">
																	<span>1 Review (s)</span>
																</div>
															</div>
															<a href="single-product.html">Printed Summer Dress</a>
															<div class="price-box">
																<span class="price">$28.98</span>
																<span class="old-price">$30.51</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="new-product">
													<div class="single-product-item">
														<div class="product-image">
															<a href="#"><img src="img/product/sale/12.jpg" alt="product-image" /></a>
															<a href="#" class="new-mark-box">new</a>
															<div class="overlay-content">
																<ul>
																	<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
																	<li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
																	<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
																	<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
																</ul>
															</div>
														</div>
														<div class="product-info">
															<div class="customar-comments-box">
																<div class="rating-box">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-half-empty"></i>
																	<i class="fa fa-star-half-empty"></i>
																</div>
																<div class="review-box">
																	<span>1 Review (s)</span>
																</div>
															</div>
															<a href="single-product.html">Printed Summer Dress</a>
															<div class="price-box">
																<span class="price">$28.98</span>
																<span class="old-price">$30.51</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="new-product">
													<div class="single-product-item">
														<div class="product-image">
															<a href="#"><img src="img/product/sale/12.jpg" alt="product-image" /></a>
															<a href="#" class="new-mark-box">new</a>
															<div class="overlay-content">
																<ul>
																	<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
																	<li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
																	<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
																	<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
																</ul>
															</div>
														</div>
														<div class="product-info">
															<div class="customar-comments-box">
																<div class="rating-box">
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star"></i>
																	<i class="fa fa-star-half-empty"></i>
																	<i class="fa fa-star-half-empty"></i>
																</div>
																<div class="review-box">
																	<span>1 Review (s)</span>
																</div>
															</div>
															<a href="single-product.html">Printed Summer Dress</a>
															<div class="price-box">
																<span class="price">$28.98</span>
																<span class="old-price">$30.51</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="add-two-by-one-column">
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
							<div class="tow-column-add zoom-img">
								<a href="#"><img src="img/product/shope-add1.jpg" alt="shope-add" /></a>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
							<div class="one-column-add zoom-img">
								<a href="#"><img src="img/product/shope-add2.jpg" alt="shope-add" /></a>
							</div>								
						</div>
					</div>
				</div>
				<div class="row">
					<div class="featured-products-area">
						<div class="center-title-area">
							<h2 class="center-title">Featured Products</h2>
						</div>
						<div class="col-xs-12">
							<div class="row">
								<div class="feartured-carousel">
									<div class="item">
										<div class="single-product-item">
											<div class="product-image">
												<a href="#"><img src="img/product/sale/3.jpg" alt="product-image" /></a>
												<a href="#" class="new-mark-box">new</a>
												<div class="overlay-content">
													<ul>
														<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
														<li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
														<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
														<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product-info">
												<div class="customar-comments-box">
													<div class="rating-box">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-half-empty"></i>
													</div>
													<div class="review-box">
														<span>1 Review (s)</span>
													</div>
												</div>
												<a href="single-product.html">Faded Short Sleeves T-shirt</a>
												<div class="price-box">
													<span class="price">$16.51</span>
												</div>
											</div>
										</div>							
									</div>
									<div class="item">
										<div class="single-product-item">
											<div class="product-image">
												<a href="#"><img src="img/product/sale/3.jpg" alt="product-image" /></a>
												<a href="#" class="new-mark-box">new</a>
												<div class="overlay-content">
													<ul>
														<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
														<li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
														<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
														<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product-info">
												<div class="customar-comments-box">
													<div class="rating-box">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-half-empty"></i>
													</div>
													<div class="review-box">
														<span>1 Review (s)</span>
													</div>
												</div>
												<a href="single-product.html">Faded Short Sleeves T-shirt</a>
												<div class="price-box">
													<span class="price">$16.51</span>
												</div>
											</div>
										</div>							
									</div>
									<div class="item">
										<div class="single-product-item">
											<div class="product-image">
												<a href="#"><img src="img/product/sale/3.jpg" alt="product-image" /></a>
												<a href="#" class="new-mark-box">new</a>
												<div class="overlay-content">
													<ul>
														<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
														<li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
														<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
														<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product-info">
												<div class="customar-comments-box">
													<div class="rating-box">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-half-empty"></i>
													</div>
													<div class="review-box">
														<span>1 Review (s)</span>
													</div>
												</div>
												<a href="single-product.html">Faded Short Sleeves T-shirt</a>
												<div class="price-box">
													<span class="price">$16.51</span>
												</div>
											</div>
										</div>							
									</div>
									<div class="item">
										<div class="single-product-item">
											<div class="product-image">
												<a href="#"><img src="img/product/sale/3.jpg" alt="product-image" /></a>
												<a href="#" class="new-mark-box">new</a>
												<div class="overlay-content">
													<ul>
														<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
														<li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
														<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
														<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product-info">
												<div class="customar-comments-box">
													<div class="rating-box">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-half-empty"></i>
													</div>
													<div class="review-box">
														<span>1 Review (s)</span>
													</div>
												</div>
												<a href="single-product.html">Faded Short Sleeves T-shirt</a>
												<div class="price-box">
													<span class="price">$16.51</span>
												</div>
											</div>
										</div>							
									</div>
									<div class="item">
										<div class="single-product-item">
											<div class="product-image">
												<a href="#"><img src="img/product/sale/3.jpg" alt="product-image" /></a>
												<a href="#" class="new-mark-box">new</a>
												<div class="overlay-content">
													<ul>
														<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
														<li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
														<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
														<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product-info">
												<div class="customar-comments-box">
													<div class="rating-box">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-half-empty"></i>
													</div>
													<div class="review-box">
														<span>1 Review (s)</span>
													</div>
												</div>
												<a href="single-product.html">Faded Short Sleeves T-shirt</a>
												<div class="price-box">
													<span class="price">$16.51</span>
												</div>
											</div>
										</div>							
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="tab-bg-product-area">
							<div class="tab-content bg-tab-content">
								<div role="tabpanel" class="tab-pane active" id="women-tab">
									<div class="bg-tab-content-area tab-carousel-1">
										<div class="item">
											<div class="single-product-item">
												<div class="product-image">
													<a href="#"><img src="img/product/sale/3.jpg" alt="product-image" /></a>
													<a href="#" class="new-mark-box">new</a>
													<div class="overlay-content">
														<ul>
															<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
															<li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
															<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
															<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
														</ul>
													</div>
												</div>
												<div class="product-info">
													<div class="customar-comments-box">
														<div class="rating-box">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-half-empty"></i>
														</div>
														<div class="review-box">
															<span>1 Review(s)</span>
														</div>
													</div>
													<a href="single-product.html">Short Sleeves T-shirt</a>
													<div class="price-box">
														<span class="price">$16.51</span>
													</div>
												</div>
											</div>							
										</div>
										<div class="item">
											<div class="single-product-item">
												<div class="product-image">
													<a href="#"><img src="img/product/sale/3.jpg" alt="product-image" /></a>
													<a href="#" class="new-mark-box">new</a>
													<div class="overlay-content">
														<ul>
															<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
															<li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
															<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
															<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
														</ul>
													</div>
												</div>
												<div class="product-info">
													<div class="customar-comments-box">
														<div class="rating-box">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-half-empty"></i>
														</div>
														<div class="review-box">
															<span>1 Review(s)</span>
														</div>
													</div>
													<a href="single-product.html">Short Sleeves T-shirt</a>
													<div class="price-box">
														<span class="price">$16.51</span>
													</div>
												</div>
											</div>							
										</div>
										<div class="item">
											<div class="single-product-item">
												<div class="product-image">
													<a href="#"><img src="img/product/sale/3.jpg" alt="product-image" /></a>
													<a href="#" class="new-mark-box">new</a>
													<div class="overlay-content">
														<ul>
															<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
															<li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
															<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
															<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
														</ul>
													</div>
												</div>
												<div class="product-info">
													<div class="customar-comments-box">
														<div class="rating-box">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-half-empty"></i>
														</div>
														<div class="review-box">
															<span>1 Review(s)</span>
														</div>
													</div>
													<a href="single-product.html">Short Sleeves T-shirt</a>
													<div class="price-box">
														<span class="price">$16.51</span>
													</div>
												</div>
											</div>							
										</div>
									</div>
								</div>
								<div role="tabpanel" class="tab-pane" id="tops-tab">
									<div class="bg-tab-content-area tab-carousel-2">
										<div class="item">
											<div class="single-product-item">
												<div class="product-image">
													<a href="#"><img src="img/product/sale/3.jpg" alt="product-image" /></a>
													<a href="#" class="new-mark-box">new</a>
													<div class="overlay-content">
														<ul>
															<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
															<li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
															<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
															<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
														</ul>
													</div>
												</div>
												<div class="product-info">
													<div class="customar-comments-box">
														<div class="rating-box">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-half-empty"></i>
														</div>
														<div class="review-box">
															<span>1 Review(s)</span>
														</div>
													</div>
													<a href="single-product.html">Short Sleeves T-shirt</a>
													<div class="price-box">
														<span class="price">$16.51</span>
													</div>
												</div>
											</div>							
										</div>
										<div class="item">
											<div class="single-product-item">
												<div class="product-image">
													<a href="#"><img src="img/product/sale/3.jpg" alt="product-image" /></a>
													<a href="#" class="new-mark-box">new</a>
													<div class="overlay-content">
														<ul>
															<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
															<li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
															<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
															<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
														</ul>
													</div>
												</div>
												<div class="product-info">
													<div class="customar-comments-box">
														<div class="rating-box">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-half-empty"></i>
														</div>
														<div class="review-box">
															<span>1 Review(s)</span>
														</div>
													</div>
													<a href="single-product.html">Short Sleeves T-shirt</a>
													<div class="price-box">
														<span class="price">$16.51</span>
													</div>
												</div>
											</div>							
										</div>
										<div class="item">
											<div class="single-product-item">
												<div class="product-image">
													<a href="#"><img src="img/product/sale/3.jpg" alt="product-image" /></a>
													<a href="#" class="new-mark-box">new</a>
													<div class="overlay-content">
														<ul>
															<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
															<li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
															<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
															<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
														</ul>
													</div>
												</div>
												<div class="product-info">
													<div class="customar-comments-box">
														<div class="rating-box">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-half-empty"></i>
														</div>
														<div class="review-box">
															<span>1 Review(s)</span>
														</div>
													</div>
													<a href="single-product.html">Short Sleeves T-shirt</a>
													<div class="price-box">
														<span class="price">$16.51</span>
													</div>
												</div>
											</div>							
										</div>
									</div>
								</div>
							</div>
							<div class="tab-carousel-menu">
								<ul class="nav nav-tabs product-bg-nav">
									<li class="active"><a href="#women-tab" data-toggle="tab">Women</a></li>
									<li><a href="#tops-tab" data-toggle="tab">tops</a></li>
									<li><a href="#t-shirts" data-toggle="tab">t-shirts</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="bestseller-products-area">
						<div class="center-title-area">
							<h2 class="center-title">bestseller</h2>
						</div>
						<div class="col-xs-12">
							<div class="row">
								<div class="bestseller-carousel">
									<div class="item">
										<div class="single-product-item">
											<div class="product-image">
												<a href="#"><img src="img/product/sale/1.jpg" alt="product-image" /></a>
												<a href="#" class="new-mark-box">sale!</a>
												<div class="overlay-content">
													<ul>
														<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
														<li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
														<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
														<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product-info">
												<div class="customar-comments-box">
													<div class="rating-box">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
													<div class="review-box">
														<span>1 Review (s)</span>
													</div>
												</div>
												<a href="single-product.html">Blouse</a>
												<div class="price-box">
													<span class="price">$22.95</span>
													<span class="old-price">$27.00</span>
												</div>
											</div>
										</div>							
									</div>
									<div class="item">
										<div class="single-product-item">
											<div class="product-image">
												<a href="#"><img src="img/product/sale/1.jpg" alt="product-image" /></a>
												<a href="#" class="new-mark-box">sale!</a>
												<div class="overlay-content">
													<ul>
														<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
														<li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
														<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
														<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product-info">
												<div class="customar-comments-box">
													<div class="rating-box">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
													<div class="review-box">
														<span>1 Review (s)</span>
													</div>
												</div>
												<a href="single-product.html">Blouse</a>
												<div class="price-box">
													<span class="price">$22.95</span>
													<span class="old-price">$27.00</span>
												</div>
											</div>
										</div>							
									</div>
									<div class="item">
										<div class="single-product-item">
											<div class="product-image">
												<a href="#"><img src="img/product/sale/1.jpg" alt="product-image" /></a>
												<a href="#" class="new-mark-box">sale!</a>
												<div class="overlay-content">
													<ul>
														<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a></li>
														<li><a href="#" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
														<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
														<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product-info">
												<div class="customar-comments-box">
													<div class="rating-box">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
													<div class="review-box">
														<span>1 Review (s)</span>
													</div>
												</div>
												<a href="single-product.html">Blouse</a>
												<div class="price-box">
													<span class="price">$22.95</span>
													<span class="old-price">$27.00</span>
												</div>
											</div>
										</div>							
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<!-- IMAGE-ADD-AREA START -->
					<div class="image-add-area">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<!-- ONEHALF-ADD START -->
							<div class="onehalf-add-shope zoom-img">
								<a href="#"><img src="img/product/one-helf1.jpg" alt="shope-add" /></a>
							</div>
							<!-- ONEHALF-ADD END -->
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<!-- ONEHALF-ADD START -->
							<div class="onehalf-add-shope zoom-img">
								<a href="#"><img src="img/product/one-helf2.jpg" alt="shope-add" /></a>
							</div>
							<!-- ONEHALF-ADD END -->
						</div>						
					</div>
					<!-- IMAGE-ADD-AREA END -->
				</div>
			</div>
		</section>
		@include('fe/blocks/latest-news-area')
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
</html>
