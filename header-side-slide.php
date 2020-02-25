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

			<div class="page_header_side header_slide ls">
				<span class="toggle_menu toggle_menu_side header-slide"><span></span></span>
				<div class="scrollbar-macosx">
					<div class="side_header_inner">


						<div class="header-side-menu">
							<!-- main side nav start -->
							<nav class="mainmenu_side_wrapper">
								<ul class="nav menu-click">


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
							<!-- eof main side nav -->
						</div>

						<div class="text-center">
							<span class="social-icons">

								<a href="#" class="fa fa-facebook color-icon border-icon rounded-icon" title="facebook"></a>
								<a href="#" class="fa fa-twitter color-icon border-icon rounded-icon" title="twitter"></a>
								<a href="#" class="fa fa-google color-icon border-icon rounded-icon" title="google"></a>

							</span>
						</div>

						<div class="widget widget_search">

							<form role="search" method="get" class="search-form" action="/">
								<label for="search-form-widget">
									<span class="screen-reader-text">Search for:</span>
								</label>
								<input type="search" id="search-form-widget" class="search-field" placeholder="Search Keyword" value="" name="search">
								<button type="submit" class="search-submit">
									<span class="screen-reader-text">Search</span>
								</button>
							</form>
						</div>


						<div class="widget widget_icons_list links-maincolor">
							<ul class="list-unstyled">
								<li class="icon-inline">
									<div class="icon-styled color-darkgrey icon-top fs-14">
										<i class="fa fa-map-marker"></i>
									</div>
									<p>90000, New Str. 123, Los Angeles, CA</p>
								</li>
								<li class="icon-inline">
									<div class="icon-styled color-darkgrey icon-top fs-14">
										<i class="fa fa-phone"></i>
									</div>
									<p>1-800-123-4567</p>
								</li>
								<li class="icon-inline">
									<div class="icon-styled color-darkgrey icon-top fs-14">
										<i class="fa fa-envelope"></i>
									</div>
									<p>
										<a href="#">email@example.com</a>
									</p>
								</li>
							</ul>
						</div>

					</div>
				</div>
			</div>

			<section class="page_topline ls ms s-py-10 c-my-5">
				<div class="container">
					<div class="divider-4"></div>
					<div class="row align-items-center">
						<div class="col-lg-6 text-lg-left text-center d-none d-lg-block">
							<p><strong class="color-darkgrey">Welcome to our site! Check our services and gain success!</strong></p>
						</div>
						<div class="col-lg-6 text-lg-right text-center">

							<ul class="top-includes border-divided small-text">

								<li>
									<span>
										<a href="#"><i class="fa fa-user"></i> Login</a>
									</span>
								</li>


								<li>
									<span>
										<a href="#"><i class="fa fa-lock"></i> Register</a>
									</span>
								</li>


							</ul>

						</div>
					</div>
					<div class="divider-4"></div>
				</div>
			</section>

			<!-- header with three Bootstrap columns - left for logo, center for navigation and right for includes-->
			<header class="page_header ls c-my-5 light-logo-text">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-sm-6">

							<a href="./" class="logo">
								<span class="logo-text py-20"><strong>Maxi</strong>com</span>
							</a>

						</div>
						<div class="col-sm-6 text-center text-sm-right">

							<ul class="top-includes">


								<li>
									<span class="social-icons">

										<a href="#" class="fa fa-facebook color-icon border-icon rounded-icon" title="facebook"></a>
										<a href="#" class="fa fa-twitter color-icon border-icon rounded-icon" title="twitter"></a>
										<a href="#" class="fa fa-google color-icon border-icon rounded-icon" title="google"></a>

									</span>
								</li>


							</ul>

						</div>
					</div>
				</div>
			</header>

			<section class="page_title ds s-py-25">
				<div class="container">
					<div class="row">

						<div class="divider-50"></div>

						<div class="col-md-12 text-center">
							<h1 class="bold">Side Slide Header</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="./">Home</a>
								</li>
								<li class="breadcrumb-item">
									<a href="#">Headers</a>
								</li>
								<li class="breadcrumb-item active">
									Side Slide Header
								</li>
							</ol>
						</div>

						<div class="divider-50"></div>

					</div>
				</div>
			</section>

			<section class="ls s-py-75 s-py-lg-100">
				<div class="container">
					<div class="row">

						<div class="d-none d-lg-block divider-50"></div>

						<main class="col-lg-12 col-xl-12">

							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
							<div class="d-none d-lg-block divider-30"></div>
							<div class="row">
								<div class="col-xl-6">
									<h3>1/2</h3>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere dolorem nisi unde itaque,
										aliquid. Necessitatibus, dolorem tempora repudiandae modi. Quis, esse eveniet suscipit! Enim
										dicta voluptate quas ea, facilis repellat!
									</p>
								</div>
								<div class="col-xl-6">
									<h3>1/2</h3>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut doloribus obcaecati incidunt
										quas iusto eos nobis. Laudantium veniam, reprehenderit nemo alias ducimus, illo, omnis
										voluptas doloribus cupiditate repudiandae porro numquam?
									</p>
								</div>
							</div>
							<div class="d-none d-lg-block divider-30"></div>
							<div class="row">
								<div class="col-xl-4">
									<h3>1/3</h3>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere dolorem nisi unde itaque,
										aliquid. Necessitatibus, dolorem tempora repudiandae modi. Quis, esse eveniet suscipit! Enim
										dicta voluptate quas ea, facilis repellat!
									</p>
								</div>
								<div class="col-xl-4">
									<h3>1/3</h3>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut doloribus obcaecati incidunt
										quas iusto eos nobis. Laudantium veniam, reprehenderit nemo alias ducimus, illo, omnis
										voluptas doloribus cupiditate repudiandae porro numquam?
									</p>
								</div>
								<div class="col-xl-4">
									<h3>1/3</h3>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut doloribus obcaecati incidunt
										quas iusto eos nobis. Laudantium veniam, reprehenderit nemo alias ducimus, illo, omnis
										voluptas doloribus cupiditate repudiandae porro.
									</p>
								</div>
							</div>

						</main>
						<!--eof .col-md-* (main content)-->

						<div class="d-none d-lg-block divider-50"></div>
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