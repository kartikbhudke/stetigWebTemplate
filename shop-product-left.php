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
	<link rel="stylesheet" href="css/shop.css" class="color-switcher-link">
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
								<h1>Shop Product with Left Sidebar</h1>
							</div>

							<div class="divider-50"></div>

						</div>

					</div>
					<ol class="breadcrumb full-width">
						<li class="breadcrumb-item">
							<a href="./">Home</a>
						</li>
						<li class="breadcrumb-item">
							<a href="#">Shop</a>
						</li>
						<li class="breadcrumb-item active">
							Shop Product with Left Sidebar
						</li>
					</ol>
				</section>
			</div>


			<section class="ls s-py-80 s-py-lg-120 s-py-xl-160 c-gutter-60">
				<div class="container">
					<div class="row">

						<main class="col-lg-7 col-xl-9 order-lg-2">
							<div class="product">

								<div class="images" data-columns="4">
									<figure>
										<div data-thumb="images/shop/03.jpg">
											<a href="images/shop/03.jpg">
												<img src="images/shop/03.jpg" alt="" data-caption="" data-src="images/shop/03.jpg" data-large_image="images/shop/03.jpg" data-large_image_width="1000" data-large_image_height="1000">
											</a>
										</div>
										<div data-thumb="images/shop/13.jpg">
											<a href="images/shop/13.jpg">
												<img src="images/shop/13.jpg" alt="" data-caption="" data-src="images/shop/13.jpg" data-large_image="images/shop/13.jpg" data-large_image_width="1000" data-large_image_height="1000">
											</a>
										</div>
										<div data-thumb="images/shop/14.jpg">
											<a href="images/shop/14.jpg">
												<img src="images/shop/14.jpg" alt="" data-caption="" data-src="images/shop/14.jpg" data-large_image="images/shop/14.jpg" data-large_image_width="1000" data-large_image_height="1000">
											</a>
										</div>
										<div data-thumb="images/shop/15.jpg">
											<a href="images/shop/15.jpg">
												<img src="images/shop/15.jpg" alt="" data-caption="" data-src="images/shop/15.jpg" data-large_image="images/shop/15.jpg" data-large_image_width="1000" data-large_image_height="1000">
											</a>
										</div>


									</figure>
								</div>

								<div class="summary entry-summary">

									<h1 class="product_title entry-title">Ship Your Idea</h1>
									<div class="woocommerce-product-rating">
										<div class="star-rating">
											<span style="width:72.6%">Rated <strong class="rating">4.33</strong> out of 5 based on <span class="rating">3</span> customer ratings</span>
										</div>
										<a href="#reviews" class="woocommerce-review-link" rel="nofollow">(<span class="count">3</span> customer
											reviews)</a>
									</div>

									<p class="price">
										<span>
											<span>$</span>20.00
										</span>
									</p>
									<div>
										<p>Lorem ipsum dolor sit amet, consetetur eto sad ipscing elitr, sed diam nonumy eirmod et tempor in vidunt ut labore et dolore magna aliquyam erat, sed diam voluptua at vero eos. Quisque ligula massa, porttitor vitae volutpat ut, luctus a mi.</p>
									</div>

									<form>

										<table class="variations">
											<tbody>
												<tr>
													<td class="label">
														<label for="pa_color">Color</label>
													</td>
													<td class="value">
														<select id="pa_color" class="wc-default-select" name="attribute_pa_color" data-attribute_name="attribute_pa_color">
															<option value="">Any color</option>
															<option value="blue" class="attached enabled">Blue</option>
														</select>
													</td>
												</tr>
												<tr>
													<td class="label">
														<label for="pa_size">Size</label>
													</td>
													<td class="value">
														<select id="pa_size" class="wc-default-select" name="attribute_pa_size" data-attribute_name="attribute_pa_size">
															<option value="">Any size</option>
															<option value="x-small" class="attached enabled">X Small</option>
															<option value="small" class="attached enabled">Small</option>
															<option value="medium" class="attached enabled">Medium</option>
															<option value="large" class="attached enabled">Large</option>
															<option value="x-large" class="attached enabled">X Large</option>
															<option value="xx-large" class="attached enabled">XX Large</option>
															<option value="xxx-large" class="attached enabled">XXX Large</option>
														</select>
													</td>
												</tr>
											</tbody>
										</table>


										<div class="single_variation_wrap">
											<div>
												<div class="quantity single">
													<input type="button" value="+" class="plus">
													<i class="fa fa-angle-up" aria-hidden="true"></i>
													<input type="number" class="input-text qty text" step="1" min="1" max="1000" name="quantity" value="1" title="Qty" size="4">
													<input type="button" value="-" class="minus">
													<i class="fa fa-angle-down" aria-hidden="true"></i>
												</div>
												<button type="submit" class="single_add_to_cart_button btn alt btn-maincolor"><span>Add to cart</span></button>
											</div>
										</div>


									</form>

									<div class="product_meta">
										<table class="table product_meta_shop">
											<tbody>
												<tr>
													<th class="sku_wrapper" scope="row">SKU:</th>
													<td>N/A</td>
												</tr>
												<tr>
													<th class="posted_in" scope="row">Categories:</th>
													<td>
														<a href="shop-right.html" rel="tag">Clothing</a>,
														<a href="shop-right.html" rel="tag">T-shirts</a>
													</td>
												</tr>
												<tr class="border-bottom">
													<th class="tagged_as" scope="row">Tag:</th>
													<td>
														<a href="shop-right.html" rel="tag">premium</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>


								</div>
								<!-- .summary -->

								<!--
		IF WE WANT to create bootstrap tabs:
		in WordPress theme We shall override tabs template
		adding 'nav nav-tabs' to 'ul.tabs'
		adding 'nav-item' to 'li'
		adding 'nav-link' to 'a'
		wrap all tabs to tab-content
		but .active is turns not on A but on LI, not as in bootstrap
	-->
								<div class="woocommerce-tabs wc-tabs-wrapper">

									<ul class="tabs wc-tabs" role="tablist">
										<li class="description_tab" id="tab-title-description" role="tab" aria-controls="tab-description">
											<a href="#tab-description">Description</a>
										</li>
										<li class="reviews_tab" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
											<a href="#tab-reviews">Reviews</a>
										</li>
									</ul>

									<div class="panel wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
										<p>At vero eos et accusam et justo duo dolores etea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo.</p>
										<p>Ermod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimat. Etiam ut bibendum leo, quis pulvinar orci. Phasellus nec eros purus. Sed consequat facilisis ligula. Nulla tristique erat mauris, et tristique nibh lacinia..</p>
									</div>
									<div class="panel wc-tab" id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews">
										<div id="reviews">
											<div id="comments">
												<ol class="commentlist">
													<li class="comment even thread-even depth-1" id="li-comment-34">

														<div id="comment-34" class="comment_container">

															<img alt="" src="images/team/comment-01.jpg">
															<div class="comment-text">

																<div class="star-rating">
																	<span style="width:80%">Rated <strong
	                                        class="rating">4</strong> out of 5</span>
																</div>
																<p class="meta">
																	<strong>James
											Koster</strong> <span>–</span>
																	<time datetime="2013-06-07T11:43:13+00:00">June 7, 2013</time>
																</p>

																<div class="description">
																	<p>Nice T-shirt, I got one in black. Goes with
																		anything!</p>
																</div>
															</div>
														</div>
													</li>
													<!-- #comment-## -->
													<li class="comment odd alt thread-odd thread-alt depth-1" id="li-comment-35">

														<div id="comment-35" class="comment_container">

															<img alt="" src="images/team/comment-02.jpg">
															<div class="comment-text">

																<div class="star-rating">
																	<span style="width:80%">Rated <strong
	                                        class="rating">4</strong> out of 5</span>
																</div>
																<p class="meta">
																	<strong>Cobus
											Bester</strong> <span>–</span>
																	<time datetime="2013-06-07T11:55:15+00:00">June 7, 2013</time>
																</p>

																<div class="description">
																	<p>Very comfortable shirt, and I love the graphic!</p>
																</div>
															</div>
														</div>
													</li>
													<!-- #comment-## -->
													<li class="comment even thread-even depth-1" id="li-comment-36">

														<div id="comment-36" class="comment_container">

															<img alt="" src="images/team/comment-03.jpg">
															<div class="comment-text">

																<div class="star-rating">
																	<span style="width:100%">Rated <strong
	                                        class="rating">5</strong> out of 5</span>
																</div>
																<p class="meta">
																	<strong>Stuart</strong>
																	<span>–</span>
																	<time datetime="2013-06-07T13:02:14+00:00">June 7, 2013</time>
																</p>

																<div class="description">
																	<p>Great T-shirt quality, Great Design and Great
																		Service.</p>
																</div>
															</div>
														</div>
													</li>
													<!-- #comment-## -->
												</ol>


											</div>


											<div id="review_form_wrapper">
												<div id="review_form">
													<div id="respond" class="comment-respond">
														<span id="reply-title" class="comment-reply-title">Add a review <small>
																<a rel="nofollow" id="cancel-comment-reply-link" href="#respond" style="display:none;">Cancel reply</a>
															</small>
														</span>
														<form action="/" method="post" id="commentform" class="comment-form" novalidate="">
															<p class="comment-notes">
																<span id="email-notes">Your email address will not be published.</span>
																Required fields are marked <span class="required">*</span>
															</p>
															<div class="comment-form-rating">
																<label>Your rating</label>
																<p class="stars">
																	<span>
																		<a class="star-1" href="#">1</a>
																		<a class="star-2" href="#">2</a>
																		<a class="star-3" href="#">3</a>
																		<a class="star-4" href="#">4</a>
																		<a class="star-5" href="#">5</a>
																	</span>
																</p>
															</div>
															<p class="comment-form-comment">
																<label for="comment">Your review <span class="required">*</span>
																</label>
																<textarea aria-required="true" rows="6" cols="45" name="comment" id="comment" class="form-control" placeholder="Your review "></textarea>
															</p>
															<p class="comment-form-author">
																<label for="author">Name <span class="required">*</span>
																</label>
																<input class="form-control" id="author" name="author" type="text" value="" size="30" aria-required="true" required="" placeholder="Full Name">
															</p>
															<p class="comment-form-email">
																<label for="email">Email <span class="required">*</span>
																</label> <input class="form-control" id="email" name="email" type="email" value="" size="30" aria-required="true" required="" placeholder="e-mail address">
															</p>
															<p class="form-submit">
																<button type="submit" id="submit" name="submit" class="btn btn-maincolor"><span>Submit</span></button>


															</p>
														</form>
													</div>
													<!-- #respond -->
												</div>
											</div>


											<div class="clear">

											</div>
										</div>
									</div>

								</div>


								<section class="up-sells upsells products">
									<h5>You May Also Like</h5>
									<ul class="products">
										<li class="product hero-bg bordered box-shadow vertical-item padding-small content-padding rounded">
											<a class="link-scale" href="shop-product-left.html">
												<span class="onsale small-text">Sale!</span>
												<img src="images/shop/01.jpg" alt="">
											</a>
											<div class="item-content">
												<h2>SM Router 01</h2>
												<div class="star-rating">
													<span style="width:80%">Rated <strong
									class="rating">4.00</strong> out of 5</span>
												</div>
												<span class="price">
													<del>
														<span>
															<span>$</span>250.00
														</span>
													</del>
													<span>$</span>200.00
												</span>
												<a rel="nofollow" href="shop-cart.html" class="btn btn-maincolor small-btn product_type_simple add_to_cart_button"><span>Add to cart</span></a>
											</div>
										</li>
										<li class="product hero-bg bordered box-shadow vertical-item padding-small content-padding rounded">
											<a class="link-scale" href="shop-product-left.html">
												<span class="onsale small-text">New</span>
												<img src="images/shop/02.jpg" alt="">
											</a>
											<div class="item-content">
												<h2>Mobile Router 02</h2>
												<div class="star-rating">
													<span style="width:80%">Rated <strong
									class="rating">4.00</strong> out of 5</span>
												</div>
												<span class="price">
													<span>$</span>200.00
												</span>
												<a rel="nofollow" href="shop-cart.html" class="btn btn-maincolor small-btn product_type_simple add_to_cart_button"><span>Add to cart</span></a>
											</div>
										</li>
										<li class="product hero-bg bordered box-shadow vertical-item padding-small content-padding rounded">
											<a class="link-scale" href="shop-product-left.html">
												<img src="images/shop/03.jpg" alt="">
											</a>
											<div class="item-content">
												<h2>Extender 0402</h2>
												<div class="star-rating">
													<span style="width:80%">Rated <strong
									class="rating">4.00</strong> out of 5</span>
												</div>
												<span class="price">

													<span>$</span>180.00
												</span>
												<a rel="nofollow" href="shop-cart.html" class="btn btn-maincolor small-btn product_type_simple add_to_cart_button"><span>Add to cart</span></a>
											</div>
										</li>
										<li class="product hero-bg bordered box-shadow vertical-item padding-small content-padding rounded">
											<a class="link-scale" href="shop-product-left.html">
												<img src="images/shop/04.jpg" alt="">
											</a>
											<div class="item-content">
												<h2>Switch Port 303</h2>
												<div class="star-rating">
													<span style="width:80%">Rated <strong
									class="rating">4.00</strong> out of 5</span>
												</div>
												<span class="price">
													<span>$</span>160.00
												</span>
												<a rel="nofollow" href="shop-cart.html" class="btn btn-maincolor small-btn product_type_simple add_to_cart_button"><span>Add to cart</span></a>
											</div>
										</li>
										<li class="product hero-bg bordered box-shadow vertical-item padding-small content-padding rounded">
											<a class="link-scale" href="shop-product-left.html">
												<img src="images/shop/05.jpg" alt="">
											</a>
											<div class="item-content">
												<h2>Server Unit 05</h2>
												<div class="star-rating">
													<span style="width:80%">Rated <strong
									class="rating">4.00</strong> out of 5</span>
												</div>
												<span class="price">
													<span>$</span>140.00
												</span>
												<a rel="nofollow" href="shop-cart.html" class="btn btn-maincolor small-btn product_type_simple add_to_cart_button"><span>Add to cart</span></a>
											</div>
										</li>
									</ul>
								</section>

								<section class="related products">

									<h5>Related Products</h5>

									<ul class="products">

										<li class="product hero-bg bordered box-shadow vertical-item padding-small content-padding rounded">
											<a class="link-scale" href="shop-product-left.html">
												<img src="images/shop/07.jpg" alt="">
											</a>
											<div class="item-content">
												<h2>Inter Power</h2>
												<div class="star-rating">
													<span style="width:80%">Rated <strong
									class="rating">4.00</strong> out of 5</span>
												</div>
												<span class="price">

													<span>$</span>100.00
												</span>
												<a rel="nofollow" href="shop-cart.html" class="btn btn-maincolor small-btn product_type_simple add_to_cart_button"><span>Add to cart</span></a>
											</div>
										</li>

										<li class="product hero-bg bordered box-shadow vertical-item padding-small content-padding rounded">
											<a class="link-scale" href="shop-product-left.html">
												<img src="images/shop/08.jpg" alt="">
											</a>
											<div class="item-content">
												<h2>NAS 0302</h2>
												<div class="star-rating">
													<span style="width:80%">Rated <strong
									class="rating">4.00</strong> out of 5</span>
												</div>
												<span class="price">
													<span>$</span>120.00
												</span>
												<a rel="nofollow" href="shop-cart.html" class="btn btn-maincolor small-btn product_type_simple add_to_cart_button"><span>Add to cart</span></a>
											</div>
										</li>

										<li class="product hero-bg bordered box-shadow vertical-item padding-small content-padding rounded">
											<a class="link-scale" href="shop-product-left.html">
												<img src="images/shop/09.jpg" alt="">
											</a>
											<div class="item-content">
												<h2>Uni Router</h2>
												<div class="star-rating">
													<span style="width:80%">Rated <strong
									class="rating">4.00</strong> out of 5</span>
												</div>
												<span class="price">
													<span>$</span>120.00
												</span>
												<a rel="nofollow" href="shop-cart.html" class="btn btn-maincolor small-btn product_type_simple add_to_cart_button"><span>Add to cart</span></a>
											</div>
										</li>
										<li class="product hero-bg bordered box-shadow vertical-item padding-small content-padding rounded">
											<a class="link-scale" href="shop-product-left.html">
												<img src="images/shop/10.jpg" alt="">
											</a>
											<div class="item-content">
												<h2>SURV Watch</h2>
												<div class="star-rating">
													<span style="width:80%">Rated <strong
									class="rating">4.00</strong> out of 5</span>
												</div>
												<span class="price">
													<span>$</span>140.00
												</span>
												<a rel="nofollow" href="shop-cart.html" class="btn btn-maincolor small-btn product_type_simple add_to_cart_button"><span>Add to cart</span></a>
											</div>
										</li>
										<li class="product hero-bg bordered box-shadow vertical-item padding-small content-padding rounded">
											<a class="link-scale" href="shop-product-left.html">
												<img src="images/shop/11.jpg" alt="">
											</a>
											<div class="item-content">
												<h2>Remote 050</h2>
												<div class="star-rating">
													<span style="width:80%">Rated <strong
									class="rating">4.00</strong> out of 5</span>
												</div>
												<span class="price">
													<span>$</span>160.00
												</span>
												<a rel="nofollow" href="shop-cart.html" class="btn btn-maincolor small-btn product_type_simple add_to_cart_button"><span>Add to cart</span></a>
											</div>
										</li>
									</ul>

								</section>


							</div>
							<!-- #product-22 -->


						</main>

						<aside class="col-lg-5 col-xl-3 order-lg-1">
							<div class="widget widget_product_search">

								<h5 class="widget-title">Search</h5>

								<form role="search" class="woocommerce-product-search" action="/">

									<label class="screen-reader-text" for="woocommerce-product-search-field-widget">
										Search for:
									</label>

									<input type="search" id="woocommerce-product-search-field-widget" class="search-field" placeholder="Keyword" value="" name="search">
									<input type="submit" value="Search">
								</form>
							</div>

							<div class="widget woocommerce widget_shopping_cart">

								<h5 class="widget-title">Shopping Cart</h5>

								<div class="widget_shopping_cart_content">

									<ul class="woocommerce-mini-cart cart_list product_list_widget ">
										<li class="woocommerce-mini-cart-item mini_cart_item">
											<a href="shop-product-right.html">
												<img src="images/shop/12.jpg" alt="">
											</a>
											<a class="cart-title" href="shop-product-right.html">
												IS Router 002
											</a>
											<a href="#" class="remove" aria-label="Remove this item" data-product_id="73" data-product_sku="">×</a>
											<span class="quantity small-text">1 x
												<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">$</span>
													20.00
												</span>
											</span>
										</li>
										<li class="woocommerce-mini-cart-item mini_cart_item">
											<a href="shop-product-right.html">
												<img src="images/shop/11.jpg" alt="">
											</a>
											<a class="cart-title" href="shop-product-right.html">
												Remote Cntrl
											</a>
											<a href="#" class="remove" aria-label="Remove this item" data-product_id="73" data-product_sku="">×</a>
											<span class="quantity small-text">2 x
												<span class="woocommerce-Price-amount amount">
													<span class="woocommerce-Price-currencySymbol">$</span>
													30.00
												</span>
											</span>
										</li>
									</ul>

									<p class="woocommerce-mini-cart__total total">
										<strong>Subtotal:</strong>
										<span class="woocommerce-Price-amount amount ">
											<span class="woocommerce-Price-currencySymbol">$</span>
											80.00
										</span>
									</p>

									<p class="woocommerce-mini-cart__buttons buttons">
										<a href="shop-cart.html" class="btn btn-maincolor wc-forward"><span>View cart</span></a>
										<a href="shop-checkout.html" class="btn btn-outline-maincolor checkout wc-forward"><span>Checkout</span></a>
									</p>
								</div>
							</div>


							<div class="widget woocommerce widget_product_categories">
								<h5 class="widget-title">Categories</h5>
								<ul class="product-categories">
									<li class="cat-item cat-parent">
										<a href="shop-right.html">Clothing</a>
										<span class="count">(12)</span>
										<ul class="children">
											<li class="cat-item">
												<a href="shop-right.html">Hoodies</a>
												<span class="count">(46)</span>
											</li>
											<li class="cat-item">
												<a href="shop-right.html">T-shirts</a>
												<span class="count">(164)</span>
											</li>
										</ul>
									</li>
									<li class="cat-item">
										<a href="shop-right.html">Posters</a>
										<span class="count">(30)</span>
									</li>
									<li class="cat-item cat-parent">
										<a href="shop-right.html">Music</a>
										<span class="count">(25)</span>
										<ul class="children">
											<li class="cat-item">
												<a href="shop-right.html">Albums</a>
												<span class="count">(20)</span>
											</li>
										</ul>
									</li>

								</ul>
							</div>


							<div class="widget woocommerce widget_top_rated_products">
								<h5 class="widget-title">Top Products</h5>
								<ul class="product_list_widget">
									<li>
										<a href="shop-product-right.html">
											<img src="images/shop/01.jpg" alt="">
											<span class="product-title">IPTV Remote</span>
										</a>
										<div class="star-rating">
											<span style="width:100%">Rated
												<strong class="rating">5.00 </strong>
												out of 5
											</span>
										</div>
										<span class="woocommerce-Price-amount amount">
											<del>
												<span>
													<span>$</span>25.00
												</span>
											</del>
											<span class="woocommerce-Price-currencySymbol">$</span>
											20.00
										</span>
									</li>

									<li>
										<a href="shop-product-right.html">
											<img src="images/shop/02.jpg" alt="">
											<span class="product-title">Woo Album #4</span>
										</a>
										<div class="star-rating">
											<span style="width:100%">Rated
												<strong class="rating">5.00</strong>
												out of 5
											</span>
										</div>
										<span class="woocommerce-Price-amount amount">
											<span class="woocommerce-Price-currencySymbol">$</span>
											9.00
										</span>
									</li>

									<li>
										<a href="shop-product-right.html">
											<img src="images/shop/03.jpg" alt="">
											<span class="product-title">Happy Ninja</span>
										</a>
										<div class="star-rating">
											<span style="width:100%">Rated
												<strong class="rating">5.00</strong>
												out of 5
											</span>
										</div>
										<span class="woocommerce-Price-amount amount">
											<span class="woocommerce-Price-currencySymbol">$</span>
											18.00
										</span>
									</li>
								</ul>
							</div>


							<div class="widget woocommerce widget_price_filter">

								<h5 class="widget-title">Price Filter</h5>

								<form method="get" action="/">
									<div class="price_slider_wrapper">
										<div class="price_slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" style="">
											<div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 10%; width: 70%;">

											</div>
											<span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 10%;">

											</span>
											<span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 80%;">

											</span>
										</div>
										<div class="price_label text-center small-text" style="">
											<span class="from">$20.00</span> - <span class="to">$500.00</span>
										</div>
										<div class="price_slider_amount">
											<input type="text" id="min_price" name="min_price" value="" data-min="20" placeholder="Min price" style="display: none;">
											<input type="text" id="max_price" name="max_price" value="" data-max="30" placeholder="Max price" style="display: none;">
											<button type="submit" class="btn btn-outline-maincolor"><span>Filter Price</span></button>

											<div class="clear"></div>

										</div>
									</div>
								</form>
							</div>


							<div class="widget woocommerce widget_layered_nav">
								<h5 class="widget-title">Filters</h5>
								<ul>
									<li class="wc-layered-nav-term chosen">
										<a href="shop-right.html">Red</a>
										<span class="count">(12)</span>
									</li>
									<li class="wc-layered-nav-term">
										<a href="#">Green</a>
										<span class="count">(18)</span>
									</li>
									<li class="wc-layered-nav-term">
										<a href="#">Black</a>
										<span class="count">(13)</span>
									</li>
									<li class="wc-layered-nav-term">
										<a href="#">Purple</a>
										<span class="count">(30)</span>
									</li>
								</ul>
							</div>


							<div class="widget woocommerce widget_product_tag_cloud">

								<h5 class="widget-title">Tags</h5>

								<div class="tagcloud">
									<a href="shop-right.html" class="tag-cloud-link" aria-label="album (1 product)">
										Premium
									</a>
									<a href="shop-right.html" class="tag-cloud-link" aria-label="premium (1 product)">
										Poster
									</a>
									<a href="shop-right.html" class="tag-cloud-link" aria-label="product (1 product)">
										Single
									</a>
									<a href="shop-right.html" class="tag-cloud-link" aria-label="single (1 product)">
										Album
									</a>
								</div>
							</div>


							<div class="widget woocommerce widget_layered_nav">
								<h5 class="widget-title">Colors Filter</h5>

								<select class="dropdown_layered_nav_color">
									<option value="">Any color</option>
									<option value="black">Black</option>
									<option value="blue">Blue</option>
									<option value="green">Green</option>
								</select>

							</div>

						</aside>
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