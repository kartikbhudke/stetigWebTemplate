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

			<section class="page_topline ls s-borderbottom c-my-20">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-6 text-md-left text-center">
							<ul class="top-includes">
								<li>
									<span class="icon-inline">
										<span class="icon-styled color-main fs-14">
											<i class="fa fa-phone"></i>
										</span>
										<span class="small-text">
											<a href="#">800 - 123-45-67</a>
										</span>
									</span>
								</li>
								<li>
									<span class="icon-inline">
										<span class="icon-styled color-main fs-14">
											<i class="fa fa-pencil"></i>
										</span>
										<span class="small-text">
											<a href="#">maxicom@example.com</a>
										</span>
									</span>
								</li>
							</ul>
						</div>
						<div class="col-md-6 text-center text-md-right d-none d-md-block">
							<ul class="top-includes">
								<li>
									<span class="icon-inline">
										<span class="icon-styled color-main2 fs-14">
											<i class="fa fa-comment"></i>
										</span>
										<span class="small-text">
											<a class="hover-main2" href="#">request a quote</a>
										</span>
									</span>
								</li>
								<li>
									<span class="icon-inline">
										<span class="icon-styled color-main2 fs-14">
											<i class="fa fa-user"></i>
										</span>
										<span class="small-text">
											<a class="hover-main2" href="#"> Login in / sign up</a>
										</span>
									</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>


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


											<li class="active">
												<a href="index.html">Home</a>
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
												<a href="about.html">Pages</a>
												<ul>
													<li>
														<a href="about.html">About</a>
													</li>
													<li>
														<a href="team.html">Team</a>
														<ul>
															<li>
																<a href="team.html">Team List</a>
															</li>
															<li>
																<a href="team-single.html">Team Member</a>
															</li>
														</ul>
													</li>
													<li>
														<a href="services.html">Our Services</a>
														<ul>
															<li>
																<a href="services.html">Services 1</a>
															</li>
															<li>
																<a href="services2.html">Services 2</a>
															</li>
															<li>
																<a href="services3.html">Services 3</a>
															</li>
															<li>
																<a href="service-single.html">Single Service</a>
															</li>
														</ul>
													</li>
													<li>
														<a href="availability-map.html">Availability Map</a>
													</li>
													<li>
														<a href="booking-form.html">Booking Form</a>
													</li>
													<!-- gallery -->
													<li>
														<a href="gallery-image.html">Gallery</a>
														<ul>
															<!-- Gallery image only -->
															<li>
																<a href="gallery-image.html">Gallery Regular</a>
																<ul>
																	<li>
																		<a href="gallery-image-2-cols.html">2 columns</a>
																	</li>
																	<li>
																		<a href="gallery-image.html">3 columns</a>
																	</li>
																	<li>
																		<a href="gallery-image-4-cols-fullwidth.html">4 columns fullwidth</a>
																	</li>

																</ul>
															</li>
															<!-- eof Gallery image only -->

															<!-- Gallery with title -->
															<li>
																<a href="gallery-title.html">Gallery Title</a>
																<ul>
																	<li>
																		<a href="gallery-title-2-cols.html">2 columns</a>
																	</li>
																	<li>
																		<a href="gallery-title.html">3 column</a>
																	</li>
																	<li>
																		<a href="gallery-title-4-cols-fullwidth.html">4 columns fullwidth</a>
																	</li>
																</ul>
															</li>
															<!-- eof Gallery with title -->

															<!-- Gallery with excerpt -->
															<li>
																<a href="gallery-excerpt.html">Gallery Excerpt</a>
																<ul>
																	<li>
																		<a href="gallery-excerpt-2-cols.html">2 columns</a>
																	</li>
																	<li>
																		<a href="gallery-excerpt.html">3 column</a>
																	</li>
																	<li>
																		<a href="gallery-excerpt-4-cols-fullwidth.html">4 columns fullwdith</a>
																	</li>
																</ul>
															</li>
															<!-- eof Gallery with excerpt -->

															<li>
																<a href="gallery-tiled.html">Tiled Gallery</a>
															</li>

															<!-- Gallery item -->
															<li>
																<a href="gallery-single.html">Gallery Single</a>
															</li>
															<!-- eof Gallery item -->
														</ul>
													</li>
													<!-- eof Gallery -->

													<li>
														<a href="pricing.html">Pricing</a>
													</li>


													<!-- events -->
													<li>
														<a href="events-left.html">Events</a>
														<ul>
															<li>
																<a href="events-left.html">Left Sidebar</a>
															</li>
															<li>
																<a href="events-right.html">Right Sidebar</a>
															</li>
															<li>
																<a href="events-full.html">Full Width</a>
															</li>
															<li>
																<a href="event-single-left.html">Single Event</a>
																<ul>
																	<li>
																		<a href="event-single-left.html">Left Sidebar</a>
																	</li>
																	<li>
																		<a href="event-single-right.html">Right Sidebar</a>
																	</li>
																	<li>
																		<a href="event-single-full.html">Full Width</a>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<!-- eof events -->
													<li>
														<a href="faq.html">FAQ</a>
														<ul>
															<li>
																<a href="faq.html">FAQ</a>
															</li>
															<li>
																<a href="faq2.html">FAQ 2</a>
															</li>
														</ul>
													</li>
													<!-- shop -->
													<li>
														<a href="shop-full.html">Shop</a>
														<ul>
															<li>
																<a href="shop-account-dashboard.html">Account</a>
																<ul>

																	<li>
																		<a href="shop-account-details.html">Account details</a>
																	</li>
																	<li>
																		<a href="shop-account-addresses.html">Addresses</a>
																	</li>
																	<li>
																		<a href="shop-account-address-edit.html">Edit Address</a>
																	</li>
																	<li>
																		<a href="shop-account-orders.html">Orders</a>
																	</li>
																	<li>
																		<a href="shop-account-order-single.html">Single Order</a>
																	</li>
																	<li>
																		<a href="shop-account-downloads.html">Downloads</a>
																	</li>
																	<li>
																		<a href="shop-account-password-reset.html">Password Reset</a>
																	</li>
																	<li>
																		<a href="shop-account-login.html">Login/Logout</a>
																	</li>

																</ul>
															</li>
															<li>
																<a href="shop-full.html">Shop Full Width</a>
															</li>
															<li>
																<a href="shop-left.html">Shop Left Sidebar</a>
															</li>
															<li>
																<a href="shop-right.html">Shop Right Sidebar</a>
															</li>
															<li>
																<a href="shop-product-right.html">Product Right Sidebar</a>
															</li>
															<li>
																<a href="shop-product-left.html">Product Left Sidebar</a>
															</li>
															<li>
																<a href="shop-cart.html">Cart</a>
															</li>
															<li>
																<a href="shop-checkout.html">Checkout</a>
															</li>
															<li>
																<a href="shop-order-received.html">Order Received</a>
															</li>

														</ul>
													</li>
													<!-- eof shop -->

													<li>
														<a href="terms_of_use.html">Terms Of Use</a>
													</li>
													<!-- features -->
													<li>
														<a href="shortcodes_iconbox.html">Shortcodes</a>
														<ul>
															<li>
																<a href="shortcodes_typography.html">Typography</a>
															</li>
															<li>
																<a href="shortcodes_buttons.html">Buttons</a>
															</li>
															<li>
																<a href="shortcodes_pricing.html">Pricing</a>
															</li>
															<li>
																<a href="shortcodes_iconbox.html">Icon Boxes</a>
															</li>
															<li>
																<a href="shortcodes_progress.html">Progress</a>
															</li>
															<li>
																<a href="shortcodes_tabs.html">Tabs &amp; Collapse</a>
															</li>
															<li>
																<a href="shortcodes_bootstrap.html">Bootstrap Elements</a>
															</li>
															<li>
																<a href="shortcodes_animation.html">Animation</a>
															</li>
															<li>
																<a href="shortcodes_icons.html">Template Icons</a>
															</li>
															<li>
																<a href="shortcodes_socialicons.html">Social Icons</a>
															</li>
														</ul>
													</li>
													<!-- eof shortcodes -->

													<li>
														<a href="shortcodes_widgets_default.html">Widgets</a>
														<ul>
															<li>
																<a href="shortcodes_widgets_default.html">Default Widgets</a>
															</li>
															<li>
																<a href="shortcodes_widgets_shop.html">Shop Widgets</a>
															</li>
															<li>
																<a href="shortcodes_widgets_custom.html">Custom Widgets</a>
															</li>
														</ul>

													</li>


													<li>
														<a href="comingsoon.html">Comingsoon</a>
													</li>
													<li>
														<a href="404.html">404</a>
													</li>
												</ul>
											</li>
											<!-- eof pages -->

											<li>
												<a href="internet.html">internet</a>
											</li>

											<li>
												<a href="iptv.html">iptv</a>
											</li>

											<li>
												<a href="voip.html">voip</a>
											</li>

											<!-- blog -->
											<li>
												<a href="blog-right.html">Blog</a>
												<ul>

													<li>
														<a href="blog-right.html">Right Sidebar</a>
													</li>
													<li>
														<a href="blog-left.html">Left Sidebar</a>
													</li>
													<li>
														<a href="blog-full.html">No Sidebar</a>
													</li>
													<li>
														<a href="blog-grid.html">Blog Grid</a>
													</li>

													<li>
														<a href="blog-single-right.html">Post</a>
														<ul>
															<li>
																<a href="blog-single-right.html">Right Sidebar</a>
															</li>
															<li>
																<a href="blog-single-left.html">Left Sidebar</a>
															</li>
															<li>
																<a href="blog-single-full.html">No Sidebar</a>
															</li>
														</ul>
													</li>

													<li>
														<a href="blog-single-video-right.html">Video Post</a>
														<ul>
															<li>
																<a href="blog-single-video-right.html">Right Sidebar</a>
															</li>
															<li>
																<a href="blog-single-video-left.html">Left Sidebar</a>
															</li>
															<li>
																<a href="blog-single-video-full.html">No Sidebar</a>
															</li>
														</ul>
													</li>

												</ul>
											</li>
											<!-- eof blog -->

											<!-- contacts -->
											<li>
												<a href="contact.html">Contact</a>
												<ul>
													<li>
														<a href="contact.html">Contact 1</a>
													</li>
													<li>
														<a href="contact2.html">Contact 2</a>
													</li>
													<li>
														<a href="contact3.html">Contact 3</a>
													</li>
													<li>
														<a href="contact4.html">Contact 4</a>
													</li>
													<li>
														<a href="contact5.html">Contact 5</a>
													</li>
												</ul>
											</li>
											<!-- eof contacts -->
											<li>
												<a href="#">Features</a>
												<div class="mega-menu">
													<ul class="mega-menu-row">
														<li class="mega-menu-col">
															<a href="#">Headers</a>
															<ul>
																<li>
																	<a href="header1.html">Header Type 1</a>
																</li>
																<li>
																	<a href="header2.html">Header Type 2</a>
																</li>
																<li>
																	<a href="header3.html">Header Type 3</a>
																</li>
																<li>
																	<a href="header4.html">Header Type 4</a>
																</li>
																<li>
																	<a href="header5.html">Header Type 5</a>
																</li>
																<li>
																	<a href="header6.html">Header Type 6</a>
																</li>
															</ul>
														</li>
														<li class="mega-menu-col">
															<a href="#">Side Menus</a>
															<ul>
																<li>
																	<a href="header-side.html">Push Left</a>
																</li>
																<li>
																	<a href="header-side-right.html">Push Right</a>
																</li>
																<li>
																	<a href="header-side-slide.html">Slide Left</a>
																</li>
																<li>
																	<a href="header-side-slide-right.html">Slide Right</a>
																</li>
															</ul>
														</li>
														<li class="mega-menu-col">
															<a href="title1.html">Title Sections</a>
															<ul>
																<li>
																	<a href="title1.html">Title section 1</a>
																</li>
																<li>
																	<a href="title2.html">Title section 2</a>
																</li>
																<li>
																	<a href="title3.html">Title section 3</a>
																</li>
																<li>
																	<a href="title4.html">Title section 4</a>
																</li>
																<li>
																	<a href="title5.html">Title section 5</a>
																</li>
																<li>
																	<a href="title6.html">Title section 6</a>
																</li>
															</ul>
														</li>
														<li class="mega-menu-col">
															<a href="footer1.html#footer">Footers</a>
															<ul>
																<li>
																	<a href="footer1.html#footer">Footer Type 1</a>
																</li>
																<li>
																	<a href="footer2.html#footer">Footer Type 2</a>
																</li>
																<li>
																	<a href="footer3.html#footer">Footer Type 3</a>
																</li>
																<li>
																	<a href="footer4.html#footer">Footer Type 4</a>
																</li>
																<li>
																	<a href="footer5.html#footer">Footer Type 5</a>
																</li>
																<li>
																	<a href="footer6.html#footer">Footer Type 6</a>
																</li>
															</ul>
														</li>
														<li class="mega-menu-col">
															<a href="copyright1.html#copyright">Copyright</a>

															<ul>
																<li>
																	<a href="copyright1.html#copyright">Copyright 1</a>
																</li>
																<li>
																	<a href="copyright2.html#copyright">Copyright 2</a>
																</li>
																<li>
																	<a href="copyright3.html#copyright">Copyright 3</a>
																</li>
																<li>
																	<a href="copyright4.html#copyright">Copyright 4</a>
																</li>
																<li>
																	<a href="copyright5.html#copyright">Copyright 5</a>
																</li>
																<li>
																	<a href="copyright6.html#copyright">Copyright 6</a>
																</li>
															</ul>
														</li>

													</ul>
												</div> <!-- eof mega menu -->
											</li>
											<!-- eof features -->

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
				<div class="flexslider" data-nav="false">
					<ul class="slides">
						<li class="ds">
							<div class="flex-bg s-overlay"></div>
							<video muted loop id="myVideo">
								<source src="video/video.mp4" type="video/mp4">
							</video>
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
						<div class="col-12 col-lg-4">
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
						<div class="col-12 col-lg-4">
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
						<div class="col-12 col-lg-4">
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
			<section class="ds s-pt-70  s-pb-70 s-pt-lg-130 s-pb-lg-160 s-pt-xl-130 s-pb-xl-160 background-gradient2 about-section cover-background" id="about">
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

			<section class="page_slider flex-team-slider" id="team">
				<div class="container-fluid">
					<div class="row">
						<div class="team-slider main-team">
							<h3 class="slider-title">Our Team</h3>
							<div class="flexslider team-slider" data-nav="false" data-dots="true">
								<ul class="slides">
									<li class="ls">
										<img src="images/team/team_slide_01.jpg" alt="">
									</li>
									<li class="ls">
										<img src="images/team/team_slide_02.jpg" alt="">
									</li>
									<li class="ls">
										<img src="images/team/team_slide_03.jpg" alt="">
									</li>
									<li class="ls">
										<img src="images/team/team_slide_04.jpg" alt="">
									</li>
								</ul>
							</div> <!-- eof flexslider -->
							<div class="flexslider-controls">
								<ul class="flex-control-nav-1">
									<li class="menu_item flex-active">
										Ronald May <span class="position">Founder</span>
									</li>
									<li class="menu_item">
										Natalie Thomas <span class="position">Trader</span>
									</li>
									<li class="menu_item">
										Frank Fajardo <span class="position">Manager</span>
									</li>
									<li class="menu_item">
										Helen Freeman <span class="position">Support</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="ls map-section s-pt-40 s-pb-30 s-pt-lg-100 s-pb-lg-90" id="location">
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
						<div class="divider-15 d-block d-lg-none"></div>
						<div class="col-12 col-md-6 col-lg-4">
							<div class="media align-items-baseline">
								<div class="icon-styled">
									<i class="color-main2 fa fa-map-marker fs-14" aria-hidden="true"></i>
								</div>

								<div class="media-body">
									<p>
										Internet and cable TV available
									</p>
								</div>
							</div>
							<div class="media align-items-baseline">
								<div class="icon-styled">
									<i class="color-main4 fa fa-map-marker fs-14" aria-hidden="true"></i>
								</div>

								<div class="media-body">
									<p>
										Internet connection only available
									</p>
								</div>
							</div>
							<div class="media align-items-baseline">
								<div class="icon-styled">
									<i class="color-main6 fa fa-map-marker fs-14" aria-hidden="true"></i>
								</div>

								<div class="media-body">
									<p>
										Cable TV connection only available
									</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-4">
							<div class="media align-items-baseline">
								<div class="icon-styled">
									<i class="color-darkgrey fa fa-map-marker fs-14" aria-hidden="true"></i>
								</div>

								<div class="media-body">
									<p>
										Connection not available
									</p>
								</div>
							</div>
							<div class="media align-items-baseline">
								<div class="icon-styled">
									<i class="color-main fa fa-cog fs-14" aria-hidden="true"></i>
								</div>

								<div class="media-body">
									<p>
										At this address is the construction of the network. Wait for connection soon
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="divider-10"></div>
				</div>
			</section>


			<section class="s-pt-60 s-pb-50 s-pt-lg-160 s-pb-lg-110 ls ms service-part c-gutter-0 c-mb-20 c-mb-lg-60 text-center text-lg-left" id="services">
				<div class="divider-5 d-block d-lg-none"></div>
				<div class="container">
					<div class="row align-items-center">
						<div class="col-12 col-lg-4 text-center text-lg-right">
							<div class="service-title d-flex d-lg-block">
								<span class="small-width color1">01</span>
								<div>
									<h6 class="fs-12 text-uppercase fw-400">full hd & 4k</h6>
									<h1>Cable TV</h1>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<div class="service-image text-center">
								<img src="images/service/01.jpg" alt="">
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<p class="service-text fs-20">Lorem ipsum dolor sit amet, consetetur sadipscing elitred diam</p>
						</div>
					</div>
					<div class="divider-20 d-block d-lg-none"></div>
					<div class="row align-items-center service02">
						<div class="col-12 col-lg-4 order-lg-3">
							<div class="service-title d-flex d-lg-block">
								<span class="small-width color2">02</span>
								<div>
									<h6 class="fs-12 text-uppercase fw-400">Dedicated</h6>
									<h1>Server</h1>
								</div>
							</div>
						</div>

						<div class="col-12 col-lg-4 order-lg-2">
							<div class="service-image text-center">
								<img src="images/service/02.jpg" alt="">
							</div>
						</div>
						<div class="col-12 col-lg-4 text-center text-lg-right order-lg-1">
							<p class="service-text fs-20">Edolore magna aliquyam eratsed diam voluptua at vero eos</p>
						</div>
					</div>
					<div class="divider-20 d-block d-lg-none"></div>
					<div class="row align-items-center service03">
						<div class="col-12 col-lg-4 ">
							<div class="service-title d-flex d-lg-block text-center text-lg-right">
								<span class="small-width color3">03</span>
								<div>
									<h6 class="fs-12 text-uppercase fw-400">High Steed</h6>
									<h1>Internet</h1>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<div class="service-image text-center">
								<img src="images/service/03.jpg" alt="">
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<p class="service-text fs-20">Stet clitakasd gubergreno sea takimta sanctus est</p>
						</div>
					</div>
					<div class="divider-20 d-block d-lg-none"></div>
					<div class="row align-items-center service04">
						<div class="col-12 col-lg-4 order-lg-3">
							<div class="service-title d-flex d-lg-block">
								<span class="small-width color4">04</span>
								<div>
									<h6 class="fs-12 text-uppercase fw-400">SmartPhone</h6>
									<h1>Service</h1>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-4 order-lg-2">
							<div class="service-image text-center">
								<img src="images/service/04.jpg" alt="">
							</div>
						</div>
						<div class="col-12 col-lg-4 text-center text-lg-right order-lg-1">
							<p class="service-text fs-20">Diam nonumy eirmod tempor invidunt ut labore dolore magna</p>
						</div>
					</div>
				</div>
				<div class="divider-10 d-block d-lg-none"></div>
				<div class="divider-50 d-block"></div>
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
			<footer class="page_footer ls ms s-pt-70 s-pb-20 s-pt-lg-130 s-pb-lg-50 footer-layout6">
				<div class="container">
					<div class="row">

						<div class="col-md-12 text-center animate" data-animation="fadeInUp">
							<div class="">
								<h4 class="color-main fw-100">800 - 123 - 45 - 67</h4>
								<h1>
									<a href="#">maxicon@example.com</a>
								</h1>
							</div>
						</div>

					</div>
				</div>
			</footer>

			<section class="page_copyright ls ms s-pb-70 s-pb-lg-130">
				<div class="container">
					<div class="row align-items-center">

						<div class="col-md-12 text-center animate" data-animation="scaleAppear">
							<p class="small-text color-lightgrey">&copy; Copyright <span class="copyright_year">2019</span> All Rights Reserved</p>
						</div>
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