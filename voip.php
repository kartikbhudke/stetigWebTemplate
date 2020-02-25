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
				<div id="particles-js"></div>
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

				<section class="page_title cs s-pt-60 s-pb-10 s-pt-lg-130 s-pb-lg-60 page_title text-center">
					<div class="container-fluid">
						<div class="row">

							<div class="divider-60"></div>

							<div class="col-md-12 text-center">
								<h1>voip</h1>
							</div>

							<div class="divider-50"></div>

						</div>

					</div>
					<ol class="breadcrumb full-width">
						<li class="breadcrumb-item">
							<a href="./">Home</a>
						</li>
						<li class="breadcrumb-item">
							<a href="#">Pages</a>
						</li>
						<li class="breadcrumb-item active">
							voip
						</li>
					</ol>
				</section>
			</div>


			<section class="s-py-80 s-py-lg-120 s-py-xl-160 ls">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 offset-lg-2">
							<h5 class="special-heading text-center">Choose Our</h5>
							<h1 class="text-center">Best price</h1>
							<p class="text-center big">Get ready for more potential, more opportunity and more of everything you expect from internet provider</p>
						</div>
					</div>
					<div class="divider-45 d-none d-lg-block"></div>
					<div class="row c-gutter-60">
						<div class="col-lg-4 col-12">
							<div class="pricing-plan rounded">
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
						<div class="col-lg-4 col-12">
							<div class="pricing-plan rounded">
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
						<div class="col-lg-4 col-12">
							<div class="pricing-plan rounded">
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

			<section id="section_testimonials" class="s-pt-75 s-pb-60 s-pb-md-80 s-py-lg-120 s-pt-xl-155 s-pb-xl-160 ls ms">
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
											Have had their service for over 1 year, completely trouble free. Installers were a pleasure to deal with. Installation was actually less than estimate. Very fast & reliable.
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


			<section class="s-pb-80 s-pb-lg-120 s-pb-xl-160 ls blog-carousel overflow-visible">
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


</body>

</html>