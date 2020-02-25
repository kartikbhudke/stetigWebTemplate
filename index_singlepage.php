<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>MaxiCom - Internedt Provider HTML template</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="color-main">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="widget widget_search">
			<a href="./" class="logo">
				<span class="logo-text py-20"><strong>Maxi</strong>com</span>
			</a>
			<form method="get" class="searchform search-form" action="/">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="btn">Search</button>
			</form>
		</div>
	</div>

	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls p-normal">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->

		</div>
	</div><!-- eof .modal -->

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->

			<!--topline section visible only on small screens|-->
			<?php include 'toplineSection.php'; ?>
			<!--eof topline-->

			<div class="header_absolute header_layout_1">
				<!-- header with two Bootstrap columns - left for logo and right for navigation and includes (search, social icons, additional links and buttons etc -->
				<header class="page_header ls justify-nav-end">
					<div class="container-fluid">
						<div class="row align-items-center">
							<div class="col-xl-2 col-lg-4 col-md-5 col-11">
								<a href="./" class="logo">
									<span class="logo-text py-20"><strong>Maxi</strong>com</span>
								</a>
							</div>
							<div class="col-xl-9 col-lg-8 col-md-7 col-1">
								<div class="nav-wrap">

									<!-- main nav start -->
									<nav class="top-nav">
										<ul class="nav sf-menu">
											<li>
												<a href="#box_wrapper">Home</a>
												<ul>
													<li>
														<a href="index.html">Home 1</a>
													</li>
													<li>
														<a href="index2.html">Home 2</a>
													</li>
													<li>
														<a href="index_static.html">Static Intro</a>
													</li>
													<li>
														<a href="index_singlepage.html">Single Page</a>
													</li>
												</ul>
											</li>

											<li>
												<a href="#price">Price</a>
											</li>

											<li>
												<a href="#about">About</a>
											</li>

											<li>
												<a href="#features">Features</a>
											</li>

											<li>
												<a href="#location">location</a>
											</li>


											<li>
												<a href="#advantage">Advantage</a>
											</li>

											<li>
												<a href="#testimonials">Testimonials</a>
											</li>

											<li>
												<a href="#blog">Blog</a>
											</li>


										</ul>
									</nav>
									<!-- eof main nav -->

									<!--hidding includes on small devices. They are duplicated in topline-->
									<ul class="top-includes d-none d-xl-block search-icon">

										<li>
											<!--modal search-->
											<span>
												<a href="#" class="search_modal_button">
													<i class="fa fa-search"></i>
												</a>
											</span>

										</li>

									</ul>

								</div>
							</div>
						</div>
					</div>
					<!-- header toggler -->
					<span class="toggle_menu"><span></span></span>
				</header>

				<div class="page_header_wrapper main-header-side">
					<div class="page_header_side header_slide header_side_right ls">
						<span class="toggle_menu toggle_menu_side header-slide"><span></span></span>
						<div class="scrollbar-macosx">
							<div class="side_header_inner">
								<div class="header-side-menu">
									<!-- main side nav start -->
									<nav class="mainmenu_side_wrapper">
										<ul class="nav menu-click">
											<li>
												<a href="faq.html">
													<i class="color-main7 fa fa-question-circle"></i>
													FAQ
												</a>
											</li>
											<li>
												<a href="booking-form.html">
													<i class="color-main7 fa fa-paper-plane"></i>
													Submit a ticket
												</a>
											</li>
											<li>
												<a href="terms_of_use.html">
													<i class="color-main7 fa fa-rocket"></i>
													Terms Of Use
												</a>
											</li>
											<li>
												<a href="availability-map.html">
													<i class="color-main7 fa fa-file-text-o"></i>
													Terms of Service
												</a>
											</li>
											<li>
												<a href="contact.html">
													<i class="color-main7 fa fa-phone"></i>
													call me back
												</a>
											</li>
										</ul>
									</nav>
									<!-- eof main side nav -->


								</div>
							</div>
						</div>
						<div class="facebook-messeger d-flex align-items-center hero-bg">
							<img src="images/messeger.png" alt="">
							<a href="https://messenger.com" class="small-text">
								facebook messeger
							</a>
						</div>
					</div>

				</div>
			</div>

			<section class="page_slider">
				<div id="particles-js"></div>
				<div class="flexslider" data-nav="false">
					<ul class="slides">
						<li class="ds">
							<img src="images/slide01.jpg" alt="">
							<div class="container">
								<div class="row">
									<div class="col-md-12">
										<div class="intro_layers_wrapper">
											<div class="intro_layers">
												<div class="intro_layer" data-animation="fadeInRight">
													<h1 class="intro_featured_word">Prepare<br>for<br>High Speed<br> Internet</h1>
													<h5 class="intro_before_featured_word intro-absolute text-uppercase fw-200">
														Best Internet Service<br> Provider In Country
													</h5>
												</div>
												<div class="intro_layer" data-animation="fadeInUp">
													<p class="text-uppercase intro_after_featured_word">Check our Internet Plans</p>
												</div>
											</div> <!-- eof .intro_layers -->
										</div> <!-- eof .intro_layers_wrapper -->
									</div> <!-- eof .col-* -->
								</div><!-- eof .row -->
							</div><!-- eof .container -->
						</li>
						<li class="ds slide2">
							<img src="images/slide02.jpg" alt="">
							<div class="container">
								<div class="row">
									<div class="col-md-12">
										<div class="intro_layers_wrapper">
											<div class="intro_layers">
												<div class="intro_layer" data-animation="fadeInRight">
													<h1 class="slide2 intro_featured_word">Internet<br>for<br>Institution<br>& SME</h1>
													<h5 class="fw-300 text-uppercase intro_before_featured_word intro-absolute">
														Leased Line Internet<br> with A+ Category
													</h5>
												</div>
												<div class="intro_layer" data-animation="fadeInUp">
													<p class="text-uppercase intro_after_featured_word">Check our Services</p>
												</div>
											</div> <!-- eof .intro_layers -->
										</div> <!-- eof .intro_layers_wrapper -->
									</div> <!-- eof .col-* -->
								</div><!-- eof .row -->
							</div><!-- eof .container -->
							<div class="social-flex">
								<p class="social-heading">
									follow
								</p>
								<p class="social-icons">
									<a href="#" class="fa fa-facebook color-white" title="facebook"></a>
									<a href="#" class="fa fa-twitter color-white" title="twitter"></a>
									<a href="#" class="fa fa-youtube-play color-white" title="google"></a>
								</p>
							</div>
						</li>
						<li class="ds slide3">
							<img src="images/slide03.jpg" alt="">
							<div class="container">
								<div class="row">
									<div class="col-md-12">
										<div class="intro_layers_wrapper">
											<div class="intro_layers">
												<div class="intro_layer" data-animation="fadeInRight">
													<h1 class="slide2 intro_featured_word">Don’t<br>Suffer<br>The<br>Buffer</h1>
													<h5 class="intro-absolute fw-300 text-uppercase intro_before_featured_word">
														Speeds Up to 1 Gbps<br> with Unlimited Data
													</h5>
												</div>
												<div class="intro_layer" data-animation="fadeInUp">
													<p class="text-uppercase intro_after_featured_word">Check Testimonials</p>
												</div>
											</div> <!-- eof .intro_layers -->
										</div> <!-- eof .intro_layers_wrapper -->
									</div> <!-- eof .col-* -->
								</div><!-- eof .row -->
							</div><!-- eof .container -->
						</li>
					</ul>
				</div> <!-- eof flexslider -->
				<div class="ds social-flex">
					<p class="social-heading">
						follow
					</p>
					<p class="social-icons">
						<a href="#" class="fa fa-facebook color-white" title="facebook"></a>
						<a href="#" class="fa fa-twitter color-white" title="twitter"></a>
						<a href="#" class="fa fa-youtube-play color-white" title="google"></a>
					</p>
				</div>
				<div class="arrow">
					<img src="images/bottom.png" alt="">
				</div>
				<div class="animated-arrow">
					<a href="#price">
						<div class="mouse_scroll">
							<span class=""><i class="color-main fa fa-angle-down unu"></i></span>
							<span class=""><i class="color-main fa fa-angle-down doi"></i></span>
							<span class=""><i class="color-main fa fa-angle-down trei"></i></span>
						</div>
					</a>
				</div>
			</section>


			<section class="s-py-80 s-py-lg-120 s-py-xl-160 ls ms">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 offset-lg-2" id="price">
							<h5 class="special-heading text-center">Choose</h5>
							<h1 class="text-center">Package</h1>
							<p class="text-center big">Get ready for more potential, more opportunity and more of everything you expect from internet provider</p>
						</div>
					</div>
					<div class="divider-45 d-none d-lg-block"></div>
					<div class="row c-gutter-60">
						<div class="col-lg-4 col-md-6">
							<div class="pricing-plan hero-bg rounded">
								<div class="plan-name text-uppercase bg-maincolor">
									<h3>
										Platinum
									</h3>
								</div>
								<div class="plan-desc">
									<div class="plan-content">
										<h4 class="color-main">350</h4>
										<p class="small-text text-left">
											<i class="color-main fa fa-angle-down" aria-hidden="true"></i>
											mb/s
										</p>
										<h4 class="color-main2">250</h4>
										<p class="small-text text-left">
											<i class="color-main2 fa fa-angle-up" aria-hidden="true"></i>
											mb/s
										</p>
									</div>
									<div class="price-icon">
										<img src="images/price-icon01.png" alt="">
									</div>
								</div>
								<div class="plan-features">
									<ul class="list-bordered">
										<li>VOIP Service</li>
										<li>Online IPTV HD</li>
										<li>Giga Port</li>
										<li>24/7 Support</li>
										<li>Free TV Set Installation</li>
									</ul>
								</div>
								<div class="price-wrap d-flex">
									<span class="plan-sign small-text">usd</span>
									<span class="plan-price color-main2">99</span>
									<span class="plan-decimals small-text">/mo</span>
								</div>
								<div class="plan-button">
									<a href="#" class="btn btn-maincolor"><span>Purchase</span></a>
								</div>
							</div>
							<div class="divider-45 d-block d-lg-none"></div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="pricing-plan hero-bg rounded">
								<div class="plan-name text-uppercase bg-maincolor2">
									<h3>
										Advanced
									</h3>
								</div>
								<div class="plan-desc">
									<div class="plan-content">
										<h4 class="color-main3">200</h4>
										<p class="small-text">
											<i class="color-main3 fa fa-angle-down" aria-hidden="true"></i>
											mb/s
										</p>
										<h4 class="color-main4">150</h4>
										<p class="small-text">
											<i class="color-main4 fa fa-angle-up" aria-hidden="true"></i>
											mb/s
										</p>
									</div>
									<div class="price-icon">
										<img src="images/price-icon02.png" alt="">
									</div>
								</div>
								<div class="plan-features">
									<ul class="list-bordered">
										<li>VOIP Service</li>
										<li>Online IPTV</li>
										<li>Giga Port</li>
										<li>24/7 Support</li>
										<li>Free TV Set Installation</li>
									</ul>
								</div>
								<div class="price-wrap d-flex">
									<span class="plan-sign small-text">usd</span>
									<span class="plan-price color-main3">79</span>
									<span class="plan-decimals small-text">/mo</span>
								</div>
								<div class="plan-button">
									<a href="#" class="btn btn-maincolor2"><span>Purchase</span></a>
								</div>
							</div>
						</div>
						<div class="divider-20 d-block d-md-none"></div>
						<div class="col-lg-4 col-md-6 margin-auto">
							<div class="pricing-plan hero-bg rounded">
								<div class="plan-name text-uppercase bg-maincolor3">
									<h3>
										Starter
									</h3>
								</div>
								<div class="plan-desc">
									<div class="plan-content">
										<h4 class="color-main5">100</h4>
										<p class="small-text">
											<i class="color-main5 fa fa-angle-down" aria-hidden="true"></i>
											mb/s
										</p>
										<h4 class="color-main6">50</h4>
										<p class="small-text">
											<i class="color-main6 fa fa-angle-up" aria-hidden="true"></i>
											mb/s
										</p>
									</div>
									<div class="price-icon">
										<img src="images/price-icon03.png" alt="">
									</div>
								</div>
								<div class="plan-features">
									<ul class="list-bordered">
										<li>VOIP Service</li>
										<li>Online IPTV</li>
										<li>Giga Port</li>
										<li>24/7 Support</li>
										<li>Free TV Set Installation</li>
									</ul>
								</div>
								<div class="price-wrap d-flex">
									<span class="plan-sign small-text">usd</span>
									<span class="plan-price color-main5">49</span>
									<span class="plan-decimals small-text">/mo</span>
								</div>
								<div class="plan-button">
									<a href="#" class="btn btn-maincolor3"><span>Purchase</span></a>
								</div>
							</div>

						</div>
					</div>
				</div>
			</section>

			<section class="ds s-pt-70 s-pb-130 s-pt-lg-130 s-pb-lg-160 s-pt-xl-130 s-pb-xl-160 background-gradient2 about-section cover-background" id="about">
				<div class="container">
					<div class="d-block d-lg-none divider-5"></div>
					<div class="row c-gutter-60 align-items-center">
						<div class="col-xl-6 col-lg-6 col-md-6 col-xs-12 order-2 order-md-1 animate" data-animation="fadeInLeftBig">
							<div class="side-image">
								<img src="images/about-image.png" width="880" alt="">
								<div class="d-block d-lg-none divider-10"></div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-xs-12 order-1 order-md-2">
							<div class="item-content text-center text-md-left">
								<h5 class="fw-200 text-uppercase">We Are</h5>
								<h3 class="text-uppercase">#1 internet service provider company in Country</h3>
								<h6 class="fw-500 font-italic">To get started with MaxiCom, please go over all of our plans to let our operators know which one works for you the best!</h6>
								<p class="big">We guarantee high-quality customer support service with high-speed satellite connection all over the world. Enjoy fun family nights and loud friends parties at your place! MaxiCom provides excellent entertainment.
								</p>
								<div class="d-flex justify-content-between mt-50">
									<a class="btn btn-white" href=""><span>Read More</span></a>
									<img src="images/signature2.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="d-none d-lg-block divider-35"></div>
			</section>

			<section class="ls s-pb-80 s-pb-lg-120 s-pb-xl-160 devices-section overflow-visible" id="features">
				<div class="container">
					<div class="row c-gutter-20 c-gutter-lg-60">
						<div class="col-12 col-lg-8 offset-lg-2 text-center">
							<img src="images/img-01.png" alt="">
							<div class="divider-50"></div>
							<h5 class="special-heading text-center">4K</h5>
							<h1 class="text-center">IPTV</h1>
							<p class="text-center big">Watch your favorite channels on various types of devices:<br> TVs, computers, smartphones and tablets</p>
							<div class="divider-50"></div>
							<a class="btn btn-google" href="#" title="Google Play">Google Play</a>
							<a class="btn btn-apple" href="#" title="Apple Store">Apple Store</a>
						</div>
					</div>
				</div>
				<div class="divider-80 d-none d-xl-block"></div>
			</section>

			<section class="ls ms map-section s-py-40 s-py-lg-100" id="location">
				<div class="page_map">
					<div class="marker">
						<div class="marker-address">sydney, australia, Liverpool street, 66</div>
						<div class="marker-title">Australia, Liverpool Street, 66</div>
						<div class="marker-description">
							Internet and cable TV available
						</div>
						<img class="marker-icon" src="images/map_marker_icon.png" alt="">
					</div>
					<!-- .marker -->

					<div class="marker">
						<div class="marker-address">sydney, australia, sutherland street, 110</div>
						<div class="marker-title">Australia, Sutherland Street, 110</div>
						<div class="marker-description">
							Internet connection only available
						</div>
						<img class="marker-icon" src="images/map_marker_icon2.png" alt="">
					</div>
					<!-- .marker -->

					<div class="marker">
						<div class="marker-address">sydney, australia, Goodhope street, 12</div>
						<div class="marker-title">Australia, Goodhope Street, 12</div>
						<div class="marker-description">
							Internet and cable TV available
						</div>
						<img class="marker-icon" src="images/map_marker_icon4.png" alt="">
					</div>
					<!-- .marker -->

					<div class="marker">
						<div class="marker-address">sydney, australia, riley street, 175</div>
						<div class="marker-title">Australia, Oxford Street, 88</div>
						<div class="marker-description">
							At this address is the construction of the network. Wait for connection soon
						</div>

						<img class="marker-icon" src="images/map_marker_icon5.png" alt="">
					</div>
					<!-- .marker -->
				</div>
				<div class="container">
					<div class="divider-10"></div>
					<div class="row text-center text-md-left">
						<div class="col-12 col-lg-4">
							<h5 class="special-heading text-center text-lg-left">San Diego</h5>
							<h3 class="text-center text-lg-left text-uppercase">Cover Map</h3>
						</div>
						<div class="col-12 col-md-6 col-lg-4">
							<p>
								<i class="color-main2 fa fa-map-marker fs-14" aria-hidden="true"></i>
								Internet and cable TV available
							</p>
							<p>
								<i class="color-main4 fa fa-map-marker fs-14" aria-hidden="true"></i>
								Internet connection only available
							</p>
							<p>
								<i class="color-main6 fa fa-map-marker fs-14" aria-hidden="true"></i>
								Cable TV connection only available
							</p>
						</div>
						<div class="col-12 col-md-6 col-lg-4">
							<p>
								<i class="color-darkgrey fa fa-map-marker fs-14" aria-hidden="true"></i>
								Connection not available
							</p>
							<p>
								<i class="color-main fa fa-cog fs-14" aria-hidden="true"></i>
								At this address is the construction of the network. Wait for connection soon
							</p>
						</div>
					</div>
					<div class="divider-10"></div>
				</div>
			</section>
			<section class="ds s-pt-80 s-pb-20 s-pt-lg-130 s-pb-lg-70 s-pt-xl-160 s-pb-xl-100 c-gutter-60 c-mb-50 background-gradient advantage-section cover-background" id="advantage">
				<div class="container">
					<div class="row">
						<div class="col-xl-4 col-md-6 animate" data-animation="fadeInUp">
							<div class="icon-box text-center">
								<div class="image-styled">
									<img alt="" src="images/icon-1.png">
								</div>
								<h5>
									<a href="service-single.html">Gift Sertificate</a>
								</h5>

								<p>
									Certificates for payment of services and equipment
								</p>
							</div>
						</div><!-- .col-* -->
						<div class="col-xl-4 col-md-6 animate" data-animation="fadeInUp">
							<div class="icon-box text-center">
								<div class="image-styled">
									<img alt="" src="images/icon-2.png">
								</div>

								<h5>
									<a href="service-single.html">Double Speed</a>
								</h5>

								<p>
									Magna aliquyam erat, sed diam voluptua at vero eos et accusam
								</p>
							</div>
						</div><!-- .col-* -->
						<div class="col-xl-4 col-md-6 animate" data-animation="fadeInUp">
							<div class="icon-box text-center">
								<div class="image-styled">
									<img alt="" src="images/icon-3.png">
								</div>

								<h5>
									<a href="service-single.html">IP Address</a>
								</h5>

								<p>
									Additional static IP address vero eos et accusam et justo duo
								</p>
							</div>
						</div><!-- .col-* -->
						<div class="col-xl-4 col-md-6 animate" data-animation="fadeInUp">
							<div class="icon-box text-center">
								<div class="image-styled">
									<img alt="" src="images/icon-4.png">
								</div>

								<h5>
									<a href="service-single.html">Cable Insurance</a>
								</h5>

								<p>
									Three free call wizard to repair the cable in the apartment
								</p>
							</div>
						</div><!-- .col-* -->
						<div class="col-xl-4 col-md-6 animate" data-animation="fadeInUp">
							<div class="icon-box text-center">
								<div class="image-styled">
									<img alt="" src="images/icon-5.png">
								</div>
								<h5>
									<a href="service-single.html">Router Setup</a>
								</h5>

								<p>
									Call a specialist to configure the router for free lifetime
								</p>
							</div>
						</div><!-- .col-* -->
						<div class="col-xl-4 col-md-6 animate" data-animation="fadeInUp">
							<div class="icon-box text-center">
								<div class="image-styled">
									<img alt="" src="images/icon-6.png">
								</div>

								<h5>
									<a href="service-single.html">Hot Reserve</a>
								</h5>

								<p>
									Redundant connectivity to Lanet and switch port
								</p>
							</div>
						</div><!-- .col-* -->
						<div class="d-none d-lg-block divider-small"></div>

					</div>
				</div>
			</section>

			<section class="s-pt-75 s-pb-60 s-pb-md-80 s-py-lg-120 s-pt-xl-155 s-pb-xl-160 ls ms" id="testimonials">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="testimonials-slider owl-carousel" data-autoplay="false" data-loop="false" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-nav="false" data-dots="true">
								<div class="quote-item">
									<div class="quote-image">
										<img src="images/team/testimonials_01.jpg" alt="">
									</div>
									<div class="quote-inner">
										<p class="small-text quote-meta">
											Gregory D. Grey, Client
										</p>
										<p class="quote-content">
											We had hughesnet for ages and were completely unhappy with it. We switched to MaxiCom and have never looked back. We are much much happier!
										</p>
										<div class="quote-signature">
											<img class="signature" src="images/testimonial-sign-1.png" alt="">
										</div>
									</div>
								</div>
								<div class="quote-item">
									<div class="quote-image">
										<img src="images/team/testimonials_02.jpg" alt="">
									</div>
									<div class="quote-inner">
										<p class="small-text quote-meta">
											Betsy R. Donley, Client
										</p>
										<p class="quote-content">
											I have been a client of MaxiCom for several years. They provide an excellent service at an amazingly great price. I tell my friends about a great service.
										</p>
										<div class="quote-signature">
											<img class="signature" src="images/testimonial-sign-2.png" alt="">
										</div>
									</div>
								</div>
								<div class="quote-item">
									<div class="quote-image">
										<img src="images/team/testimonials_03.jpg" alt="">
									</div>
									<div class="quote-inner">
										<p class="small-text quote-meta">
											Gregory D. Grey, Client
										</p>
										<p class="quote-content">
											Have had their service for over 1 year, completely trouble free. Installers were a pleasure to deal with. Installation was actually less than estimate.
										</p>
										<div class="quote-signature">
											<img class="signature" src="images/testimonial-sign-3.png" alt="">
										</div>
									</div>
								</div>
							</div><!-- .testimonials-slider -->

						</div>
					</div>
				</div>
				<div class="divider-55 d-block"></div>
			</section>


			<section class="s-pb-80 s-pb-lg-120 s-pb-xl-160 ls blog-carousel overflow-visible" id="blog">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="owl-carousel" data-autoplay="true" data-loop="true" data-responsive-lg="3" data-responsive-md="2" data-responsive-sm="2" data-nav="false" data-dots="false" data-margin="60">
								<article class="vertical-item text-center text-md-left post type-post status-publish format-standard has-post-thumbnail">
									<div class="item-media post-thumbnail">
										<div class="item-media">
											<img src="images/gallery/06.jpg" alt="">
											<div class="media-links">
												<a class="abs-link" title="" href="blog-single-@@type.html"></a>
											</div>
											<div class="post-data">
												<a href="#">
													<h6>02<span>oct</span></h6>
												</a>
											</div>
										</div>
									</div><!-- .post-thumbnail -->
									<div class="item-content">
										<header class="entry-header">
											<h6>
												<a href="blog-single-@@type.html" rel="bookmark">
													Watch Your Favorite Racing Sport Channels!
												</a>
											</h6>
											<div class="entry-meta small-text color-darkgrey">
												<span class="comment-count">
													<a href="#">
														5 comments
													</a>
												</span>
												<span class="like-count">
													<a href="#">
														2 Likes
													</a>
												</span>
												<span class="views-count">
													10 Views
												</span>
											</div>
											<!-- .entry-meta -->

										</header>
										<!-- .entry-header -->
									</div><!-- .item-content -->
								</article><!-- #post-## -->
								<article class="vertical-item text-center text-md-left post type-post status-publish format-standard has-post-thumbnail">
									<div class="item-media post-thumbnail">
										<div class="item-media">
											<img src="images/gallery/07.jpg" alt="">
											<div class="media-links">
												<a class="abs-link" title="" href="blog-single-@@type.html"></a>
											</div>
											<div class="post-data">
												<a href="#">
													<h6>27<span>sept</span></h6>
												</a>
											</div>
										</div>
									</div><!-- .post-thumbnail -->
									<div class="item-content">
										<header class="entry-header">
											<h6>
												<a href="blog-single-@@type.html" rel="bookmark">
													When Movie Stars Switch to Reality TV Shows
												</a>
											</h6>
											<div class="entry-meta small-text color-darkgrey">
												<span class="comment-count">
													<a href="#">
														3 comments
													</a>
												</span>
												<span class="like-count">
													<a href="#">
														1 Likes
													</a>
												</span>
												<span class="views-count">
													19 Views
												</span>
											</div>
											<!-- .entry-meta -->

										</header>
										<!-- .entry-header -->
									</div><!-- .item-content -->
								</article><!-- #post-## -->
								<article class="vertical-item text-center text-md-left post type-post status-publish format-standard has-post-thumbnail">
									<div class="item-media post-thumbnail">
										<div class="item-media">
											<img src="images/gallery/03.jpg" alt="">
											<div class="media-links">
												<a class="abs-link" title="" href="blog-single-@@type.html"></a>
											</div>
											<div class="post-data">
												<a href="#">
													<h6>19<span>sept</span></h6>
												</a>
											</div>
										</div>
									</div><!-- .post-thumbnail -->
									<div class="item-content">
										<header class="entry-header">
											<h6>
												<a href="blog-single-@@type.html" rel="bookmark">
													7 Questions after The Walking Dead’s Season 7 Finale
												</a>
											</h6>
											<div class="entry-meta small-text color-darkgrey">
												<span class="comment-count">
													<a href="#">
														9 comments
													</a>
												</span>
												<span class="like-count">
													<a href="#">
														4 Likes
													</a>
												</span>
												<span class="views-count">
													25 Views
												</span>
											</div>
											<!-- .entry-meta -->

										</header>
										<!-- .entry-header -->
									</div><!-- .item-content -->
								</article><!-- #post-## -->
								<article class="vertical-item text-center text-md-left post type-post status-publish format-standard has-post-thumbnail">
									<div class="item-media post-thumbnail">
										<div class="item-media">
											<img src="images/gallery/05.jpg" alt="">
											<div class="media-links">
												<a class="abs-link" title="" href="blog-single-@@type.html"></a>
											</div>
											<div class="post-data">
												<a href="#">
													<h6>11<span>sept</span></h6>
												</a>
											</div>
										</div>
									</div><!-- .post-thumbnail -->
									<div class="item-content">
										<header class="entry-header">
											<h6>
												<a href="blog-single-@@type.html" rel="bookmark">
													When Movie Stars Switch to Reality TV Shows
												</a>
											</h6>
											<div class="entry-meta small-text color-darkgrey">
												<span class="comment-count">
													<a href="#">
														4 comments
													</a>
												</span>
												<span class="like-count">
													<a href="#">
														3 Likes
													</a>
												</span>
												<span class="views-count">
													14 Views
												</span>
											</div>
											<!-- .entry-meta -->

										</header>
										<!-- .entry-header -->
									</div><!-- .item-content -->
								</article><!-- #post-## -->
								<article class="vertical-item text-center text-md-left post type-post status-publish format-standard has-post-thumbnail">
									<div class="item-media post-thumbnail">
										<div class="item-media">
											<img src="images/gallery/10.jpg" alt="">
											<div class="media-links">
												<a class="abs-link" title="" href="blog-single-@@type.html"></a>
											</div>
											<div class="post-data">
												<a href="#">
													<h6>04<span>sept</span></h6>
												</a>
											</div>
										</div>
									</div><!-- .post-thumbnail -->
									<div class="item-content">
										<header class="entry-header">
											<h6>
												<a href="blog-single-@@type.html" rel="bookmark">
													Myriad Entertainment Options in Your Home Package
												</a>
											</h6>
											<div class="entry-meta small-text color-darkgrey">
												<span class="comment-count">
													<a href="#">
														1 comments
													</a>
												</span>
												<span class="like-count">
													<a href="#">
														0 Likes
													</a>
												</span>
												<span class="views-count">
													7 Views
												</span>
											</div>
											<!-- .entry-meta -->

										</header>
										<!-- .entry-header -->
									</div><!-- .item-content -->
								</article><!-- #post-## -->
								<article class="vertical-item text-center text-md-left post type-post status-publish format-standard has-post-thumbnail">
									<div class="item-media post-thumbnail">
										<div class="item-media">
											<img src="images/gallery/17.jpg" alt="">
											<div class="media-links">
												<a class="abs-link" title="" href="blog-single-@@type.html"></a>
											</div>
											<div class="post-data">
												<a href="#">
													<h6>31<span>aug</span></h6>
												</a>
											</div>
										</div>
									</div><!-- .post-thumbnail -->
									<div class="item-content">
										<header class="entry-header">
											<h6>
												<a href="blog-single-@@type.html" rel="bookmark">
													Stay Tuned for New Sports and Travel Channels
												</a>
											</h6>
											<div class="entry-meta small-text color-darkgrey">
												<span class="comment-count">
													<a href="#">
														6 comments
													</a>
												</span>
												<span class="like-count">
													<a href="#">
														8 Likes
													</a>
												</span>
												<span class="views-count">
													34 Views
												</span>
											</div>
											<!-- .entry-meta -->

										</header>
										<!-- .entry-header -->
									</div><!-- .item-content -->
								</article><!-- #post-## -->
							</div><!-- .testimonials-slider -->

						</div>
					</div>
				</div>
			</section>


			<section class="footer-carousel c-gutter-0 container-px-0 s-py-0">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-12 text-center">
							<div class="owl-carousel small-gallery-carousel" data-margin="0" data-responsive-lg="8" data-responsive-md="4" data-responsive-sm="3" data-responsive-xs="2" data-nav="true" data-loop="true">

								<a href="images/square/03.jpg" class="photoswipe-link" data-width="800" data-height="800">
									<img src="images/square/03.jpg" alt="">
								</a>
								<a href="images/square/04.jpg" class="photoswipe-link" data-width="800" data-height="800">
									<img src="images/square/04.jpg" alt="">
								</a>
								<a href="images/square/05.jpg" class="photoswipe-link" data-width="800" data-height="800">
									<img src="images/square/05.jpg" alt="">
								</a>
								<a href="images/square/06.jpg" class="photoswipe-link" data-width="800" data-height="800">
									<img src="images/square/06.jpg" alt="">
								</a>
								<a href="images/square/07.jpg" class="photoswipe-link" data-width="800" data-height="800">
									<img src="images/square/07.jpg" alt="">
								</a>
								<a href="images/square/08.jpg" class="photoswipe-link" data-width="800" data-height="800">
									<img src="images/square/08.jpg" alt="">
								</a>
								<a href="images/square/09.jpg" class="photoswipe-link" data-width="800" data-height="800">
									<img src="images/square/09.jpg" alt="">
								</a>
								<a href="images/square/10.jpg" class="photoswipe-link" data-width="800" data-height="800">
									<img src="images/square/10.jpg" alt="">
								</a>
								<a href="images/square/01.jpg" class="photoswipe-link" data-width="800" data-height="800">
									<img src="images/square/01.jpg" alt="">
								</a>
								<a href="images/square/02.jpg" class="photoswipe-link" data-width="800" data-height="800">
									<img src="images/square/02.jpg" alt="">
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<footer class="page_footer ls ms s-pt-80 s-pb-70 s-py-lg-120 s-pt-xl-135 s-pb-xl-105 c-gutter-60 text-center text-md-left">
				<div class="container">
					<div class="row">
						<div class="divider-20 d-none d-xl-block"></div>

						<div class="col-md-6 col-xl-3 order-xl-1 order-md-1 animate" data-animation="fadeInUp">

							<div class="widget widget_text">
								<h4 class="widget-title">About</h4>
								<p>
									Welcome largest broadband and Internet services provider where you can choose the best plan ever.
								</p>
								<div class="widget widget_social_buttons">
									<a href="#" class="fa fa-facebook color-bg-icon rounded-icon" title="facebook"></a>
									<a href="#" class="fa fa-twitter color-bg-icon rounded-icon" title="twitter"></a>
									<a href="#" class="fa fa-youtube-play color-bg-icon rounded-icon" title="youtube-play"></a>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-xl-3 order-xl-2 order-md-4 animate" data-animation="fadeInUp">
							<div class="widget links">
								<h4 class="widget-title">Links</h4>
								<ul>
									<li class="cat-item">
										<a href="blog-right.html">Packages</a>
									</li>
									<li class="cat-item">
										<a href="blog-right.html">MaxiNet Media</a>
									</li>
									<li class="cat-item">
										<a href="blog-right.html">Connection</a>
									</li>
									<li class="cat-item">
										<a href="blog-right.html">Support</a>
									</li>
									<li class="cat-item">
										<a href="blog-right.html">Video Tutorials</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-6 col-xl-3 order-xl-3 order-md-3 animate" data-animation="fadeInUp">
							<div class="widget services-links">
								<h4 class="widget-title">Services</h4>
								<ul>
									<li class="cat-item">
										<a href="blog-right.html">4K Cable TV</a>
									</li>
									<li class="cat-item">
										<a href="blog-right.html">Dedicated Server</a>
									</li>
									<li class="cat-item">
										<a href="blog-right.html">High Speed Internet</a>
									</li>
									<li class="cat-item">
										<a href="blog-right.html">Smartphone Service</a>
									</li>
									<li class="cat-item">
										<a href="blog-right.html">Dedicated Server</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-6 col-xl-3 order-xl-4 order-md-2 animate" data-animation="fadeInUp">
							<div class="widget widget_icons_list">
								<h4 class="widget-title">Call Us</h4>
								<p>23-456-7890</p>
								<a href="#" class="small-text">
									<i class="fa fa-envelope-o color-main fs-14"></i>
									email us
								</a>
								<h4 class="widget-title">Visit Us</h4>
								<p>246 Benson St., Ashwaubenon</p>
								<a href="#" class="small-text">
									<i class="fa fa-map-marker color-main3 fs-14"></i>
									Get Direction
								</a>
							</div>
							<div class="divider-45 d-none d-md-block d-xlz-none"></div>
						</div>
					</div>
				</div>
			</footer>
			<section class="page_copyright ds s-py-10 copyright-bg">
				<div class="container">
					<div class="row align-items-center">
						<div class="divider-15 d-none d-lg-block"></div>
						<div class="col-md-12 text-center">
							<p>&copy; Copyright <span class="copyright_year">2019</span> All Rights Reserved</p>
						</div>
						<div class="divider-15 d-none d-lg-block"></div>
					</div>
				</div>
			</section>


		</div><!-- eof #box_wrapper -->
	</div><!-- eof #canvas -->


	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>


	<!-- Google Map Script -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0pr5xCHpaTGv12l73IExOHDJisBP2FK4&callback=initGoogleMap"></script>

</body>

</html>