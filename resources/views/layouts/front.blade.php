<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>Eshop - eCommerce HTML5 Template.</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/favicon.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

	<!-- StyleSheet -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="/asset/css/bootstrap.css">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="/asset/css/magnific-popup.min.css">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="/asset/css/font-awesome.css">
	<!-- Fancybox -->
	<link rel="stylesheet" href="/asset/css/jquery.fancybox.min.css">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="/asset/css/themify-icons.css">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="/asset/css/niceselect.css">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="/asset/css/animate.css">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="/asset/css/flex-slider.min.css">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="/asset/css/owl-carousel.css">
	<!-- Slicknav -->
    <link rel="stylesheet" href="/asset/css/slicknav.min.css">

	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="/asset/css/reset.css">
	<link rel="stylesheet" href="/asset/style.css">
	<link rel="stylesheet" href="/asset/bundle.css">
    <link rel="stylesheet" href="/asset/css/responsive.css">
    @livewireStyles


</head>
<body class="js">

	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->


	<!-- Header -->
	<header class="header shop">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-12">
						<!-- Top Left -->
						<div class="top-left">
							<ul class="list-main">
								<li><i class="ti-headphone-alt"></i><span class="ti-headphone-text"> (+880) 9610-223344</span></li>
							</ul>
						</div>
						<!--/ End Top Left -->
					</div>
					<div class="col-lg-8 col-md-12 col-12">
						<!-- Top Right -->
						<div class="right-content">
							<ul class="list-main">
								{{-- <li><i class="ti-location-pin"></i> Store location</li>
								<li><i class="ti-alarm-clock"></i> <a href="#">Daily deal</a></li>
								<li><i class="ti-user"></i> <a href="#">My account</a></li> --}}
								@auth
									<li>
										<i class="ti-power-off"></i>
											<a href="{{ route('logout') }}"
												onclick="event.preventDefault();
																document.getElementById('logout-form').submit();">
													{{ __('Logout') }}
											</a>

											<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												@csrf
											</form>
									</li>
								@else
									<li><i class="ti-power-off"></i><a href="{{ route('login') }}">Login</a></li>
								@endauth
							</ul>
						</div>
						<!-- End Top Right -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Topbar -->
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
                            <a href="{{ route('home') }}"><img src="/images/logo.png" alt="logo"></a>
						</div>
						<!--/ End Logo -->
						<!-- Search Form -->
						{{-- <div class="search-top">
							<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
							<!-- Search Form -->
							<div class="search-top">
								<form class="search-form">
									<input type="text" placeholder="Search here..." name="search">
									<button value="search" type="submit"><i class="ti-search"></i></button>
								</form>
							</div>
							<!--/ End Search Form -->
						</div> --}}
						<!--/ End Search Form -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-8 col-md-7 col-12">
						<div class="search-bar-top">
							<div class="search-bar">
								{{-- <select>
									<option selected="selected">All Category</option>
									<option>watch</option>
									<option>mobile</option>
									<option>kid’s item</option>
								</select> --}}
								<form action="{{ route('product.search') }}" method="GET">
									<input name="search" placeholder="Search Products Here....." type="search">
									<button class="btnn" type="submit"><i class="ti-search"></i></button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-12">
						<div class="right-bar">
							<!-- Search Form -->
							<div class="sinlge-bar">
								<a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar">
								<a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar shopping">
								<a href="{{ route('cart.index') }}" class="single-icon"><i class="ti-bag"></i> <span class="total-count">
                                    @auth
                                        {{ \Cart::session(auth()->id())->getContent()->count() }}
                                    @else
                                        0
                                    @endauth
                                </span></a>
								<!-- Shopping Item -->
								<div class="shopping-item">
									<div class="dropdown-cart-header">
										<span>
                                            @auth
                                                {{ \Cart::session(auth()->id())->getContent()->count() }}
                                            @else
                                                0
                                            @endauth
                                            Items</span>
										<a href="{{ route('cart.index') }}">View Cart</a>
									</div>
									<ul class="shopping-list">
										@if(isset($cartItems))
											@foreach ($cartItems as $cartItem)
												<li>
													<a href="{{ route('cart.destroy', $cartItem->id) }}" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
													<a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
												<h4><a href="{{ $cartItem->id }}">{{ $cartItem->name }}</a></h4>
													<p class="quantity">{{ $cartItem->quantity }}x - <span class="amount">
													@auth
														${{ Cart::session(auth()->id())->get($cartItem->id)->getPriceSum() }}
													@else
														${{ Cart::session('_token')->get($cartItem->id)->getPriceSum() }}
													@endauth
													</span></p>
												</li>
											@endforeach
										@endif
									</ul>
									<div class="bottom">
										<div class="total">
											<span>Total</span>
											<span class="total-amount">$
												@auth
													{{ \Cart::session(auth()->id())->getTotal() }}
												@else
													{{ \Cart::session('_token')->getTotal() }}
												@endauth
											</span>
										</div>
										<a href="{{ route('cart.checkout') }}" class="btn animate">Checkout</a>
									</div>
								</div>
								<!--/ End Shopping Item -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="cat-nav-head">
					<div class="row">
						<div class="col-lg-3">
                            @yield('category')
						</div>
						<div class="col-lg-9 col-12">
							<div class="menu-area">
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">
										<div class="nav-inner">
											<ul class="nav main-menu menu navbar-nav">
                                                <li class="active"><a href="{{ route('home') }}">Home</a></li>
													<li><a href="{{ route('products.index') }}">Product</a></li>
													<li><a href="#">Service</a></li>
													{{-- <li><a href="#">Shop<i class="ti-angle-down"></i><span class="new">New</span></a>
														<ul class="dropdown">
															<li><a href="shop-grid.html">Shop Grid</a></li>
															<li><a href="cart.html">Cart</a></li>
															<li><a href="checkout.html">Checkout</a></li>
														</ul>
													</li>
													<li><a href="#">Pages</a></li>
													<li><a href="#">Blog<i class="ti-angle-down"></i></a>
														<ul class="dropdown">
															<li><a href="blog-single-sidebar.html">Blog Single Sidebar</a></li>
														</ul>
													</li> --}}
													<li><a href="{{ route('contact.index') }}">Contact Us</a></li>
												</ul>
										</div>
									</div>
								</nav>
								<!--/ End Main Menu -->
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
		<!--/ End Header Inner -->
	</header>
	<!--/ End Header -->

	<!-- Slider Area -->

	<!--/ End Slider Area -->
	<!-- Start Small Banner  -->
	<!-- End Small Banner -->

	<!-- Start Product Area -->
        @yield('content')
	<!-- End Product Area -->

	<!-- Start Midium Banner  -->

	<!-- End Midium Banner -->

	<!-- Start Most Popular -->

	<!-- End Most Popular Area -->

	<!-- Start Shop Home List  -->

	<!-- End Shop Home List  -->

	<!-- Start Cowndown Area -->

	<!-- /End Cowndown Area -->

	<!-- Start Shop Blog  -->

	<!-- End Shop Blog  -->

	<!-- Start Shop Services Area -->

	<!-- End Shop Services Area -->

	<!-- Start Shop Newsletter  -->
	<!-- End Shop Newsletter -->

	<!-- Modal -->

    <!-- Modal end -->

	<!-- Start Footer Area -->
	<footer class="footer">
		<!-- Footer Top -->
		<div class="footer-top section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer about">
							<div class="logo">
								<a href="index.html"><img src="images/logo2.png" alt="#"></a>
							</div>
							<p class="text">Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue,  magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
							<p class="call">Got Question? Call us 24/7<span><a href="tel:123456789">+0123 456 789</a></span></p>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Information</h4>
							<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Faq</a></li>
								<li><a href="#">Terms & Conditions</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Help</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Customer Service</h4>
							<ul>
								<li><a href="#">Payment Methods</a></li>
								<li><a href="#">Money-back</a></li>
								<li><a href="#">Returns</a></li>
								<li><a href="#">Shipping</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer social">
							<h4>Get In Tuch</h4>
							<!-- Single Widget -->
							<div class="contact">
								<ul>
									<li>House 37, Road 27, Block A,</li>
									<li>Banani,  Dhaka-1213</li>
									<li>info@motorsheba.com</li>
									<li>(+880) 9610-223344</li>
								</ul>
							</div>
							<!-- End Single Widget -->
							<ul>
								<li><a href="#"><i class="ti-facebook"></i></a></li>
								<li><a href="#"><i class="ti-twitter"></i></a></li>
								<li><a href="#"><i class="ti-flickr"></i></a></li>
								<li><a href="#"><i class="ti-instagram"></i></a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Top -->
		<div class="copyright">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="left">
								<p>Copyright © 2020 <a href="http://www.wpthemesgrid.com" target="_blank">Wpthemesgrid</a>  -  All Rights Reserved.</p>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="right">
								<img src="images/payments.png" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /End Footer Area -->

	<!-- Jquery -->
    <script src="/asset/js/jquery.min.js"></script>
    <script src="/asset/js/jquery-migrate-3.0.0.js"></script>
	<script src="/asset/js/jquery-ui.min.js"></script>
	<!-- Popper JS -->
	<script src="/asset/js/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="/asset/js/bootstrap.min.js"></script>
	<!-- Color JS -->
	<script src="/asset/js/colors.js"></script>
	<!-- Slicknav JS -->
	<script src="/asset/js/slicknav.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="/asset/js/owl-carousel.js"></script>
	<!-- Magnific Popup JS -->
	<script src="/asset/js/magnific-popup.js"></script>
	<!-- Waypoints JS -->
	<script src="/asset/js/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="/asset/js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="/asset/js/nicesellect.js"></script>
	<!-- Flex Slider JS -->
	<script src="/asset/js/flex-slider.js"></script>
	<!-- ScrollUp JS -->
	<script src="/asset/js/scrollup.js"></script>
	<!-- Onepage Nav JS -->
	<script src="/asset/js/onepage-nav.min.js"></script>
	<!-- Easing JS -->
	<script src="/asset/js/easing.js"></script>
	<!-- Active JS -->
    <script src="/asset/js/active.js"></script>
    @yield('scripts')
    @livewireScripts
</body>
</html>
