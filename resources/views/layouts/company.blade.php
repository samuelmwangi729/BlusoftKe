<!DOCTYPE html>
<html lang="zxx">
	<head>
		<!-- Meta Tag -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name='copyright' content='pavilan'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Title Tag  -->
		<title>{{ config('app.name') }} - company developed to provide custom web solutions to your business. We deal with web development, web design and
            all soughts of Applications. We are glad to be of help to you</title>
            <meta content="{{ config('app.name') }} is a company developed to provide custom web solutions to your business. We deal with web development, web design and all soughts of Applications. We are glad to be of help to you." name="description">
            <meta content="Websites, Freelance, Kenya, Africa, Development, Jobs,Information Security, Hacking,Flutter, Android Development" name="keywords">
		<!-- Favicon -->
		<link rel="icon" type="image/favicon.png" href="img/favicon.png">

		<!-- Web Font -->
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

		<!-- Bizwheel Plugins CSS -->
		<link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/cubeportfolio.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
		<link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/magnific-popup.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/owl-carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}">

		<!-- Bizwheel Stylesheet -->
		<link rel="stylesheet" href="{{ asset('css/reset.css') }}">
		<link rel="stylesheet" href="{{ asset('style.css') }}">
		<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

		<!-- The Web Colors Colors -->
		{{-- <!--<link rel="stylesheet" href="{{ asset('css/skins/skin-1.css') }}"> --}}
		<!--<link rel="stylesheet" href="{{ asset('css/skins/skin-2.css') }}">-->
		<!--<link rel="stylesheet" href="{{ asset('css/skins/skin-3.css') }}">-->
		<!--<link rel="stylesheet" href="{{ asset('css/skins/skin-4.css') }}">-->

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="{{ asset('js/app.js') }}" defer></script>

	</head>
	<body id="bg">

		<!-- Boxed Layout -->
		<div id="page" class="site boxed-layout">

		<!-- Preloader -->
		<div class="preeloader">
			<div class="preloader-spinner"></div>
		</div>
		<!--/ End Preloader -->

		<!-- Header -->
		<header class="header">
			<!-- Topbar -->
			<div class="topbar">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-8 col-12">
							<!-- Top Contact -->
							<div class="top-contact">
								<div class="single-contact"><i class="fa fa-phone"></i>Phone: +254(0) 704922042</div>
								<div class="single-contact"><i class="fa fa-envelope-open"></i>Email: info@blusoft.co.ke</div>
								<div class="single-contact"><i class="fa fa-clock-o"></i>Opening: 08AM - 09PM</div>
							</div>
							<!-- End Top Contact -->
						</div>
						<div class="col-lg-4 col-12">
							<div class="topbar-right">
								<!-- Social Icons -->
								<ul class="social-icons">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								</ul>
								<div class="button">
									<a href="contact.html" class="bizwheel-btn">Get a Quote</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Topbar -->
			<!-- Middle Header -->
			<div class="middle-header">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<div class="middle-inner">
								<div class="row">
									<div class="col-lg-2 col-md-3 col-12">
										<!-- Logo -->
										<div class="logo">
											<!-- Image Logo -->
											<div class="img-logo">
												<a href="/">
													<img src="img/logo.png" alt="#">
												</a>
											</div>
										</div>
										<div class="mobile-nav"></div>
									</div>
									<div class="col-lg-10 col-md-9 col-12">
										<div class="menu-area">
											<!-- Main Menu -->
											<nav class="navbar navbar-expand-lg">
												<div class="navbar-collapse">
													<div class="nav-inner">
														<div class="menu-home-menu-container">
															<!-- Naviagiton -->
															<ul id="nav" class="nav main-menu menu navbar-nav">
																<li><a href="/">Home</a></li>
																<li><a href="{{ url('/Services') }}">Our Services</a></li>
																<li><a href="{{ url('/Blog') }}">Blog</a>
																</li>
																<li><a href="{{ url('/About') }}">About Us</a>
																</li>
																<li><a href="{{ url('/Contact') }}">Contact Us</a></li>
															</ul>
															<!--/ End Naviagiton -->
														</div>
													</div>
												</div>
											</nav>
											<!--/ End Main Menu -->
											<!-- Right Bar -->
											<div class="right-bar">
												<!-- Search Bar -->
												<ul class="right-nav">
													<li class="top-search"><a href="#0"><i class="fa fa-search"></i></a></li>
													<li class="bar"><a class="fa fa-bars"></a></li>
												</ul>
												<!--/ End Search Bar -->
												<!-- Search Form -->
												<div class="search-top">
													<form action="#" class="search-form" method="get">
														<input type="text" name="s" value="" placeholder="Search here"/>
														<button type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
													</form>
												</div>
												<!--/ End Search Form -->
											</div>
											<!--/ End Right Bar -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Middle Header -->
			<!-- Sidebar Popup -->
			<div class="sidebar-popup">
				<div class="cross">
					<a class="btn"><i class="fa fa-close"></i></a>
				</div>
				<div class="single-content">
					<h4>About Blusoft</h4>
					<p>The sole mandate of the company is to provide custom Software and security measures to help in smooth running of any bussiness. We utilise cutting-edge technology, extensive knowledge and experience for you to avoid security breaches and interuptions that may cause you money or lead to any loss to the business.</p>
					<!-- Social Icons -->
					<ul class="social">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
					</ul>
				</div>
				<div class="single-content">
					<h4>Important Links</h4>
					<ul class="links">
						<li><a href="/About">About Us</a></li>
						<li><a href="/Services">Our Services</a></li>
						<li><a href="/Blog">Blog</a></li>
						<li><a href="/Contact">Contact us</a></li>
					</ul>
				</div>
			</div>
			<!--/ Sidebar Popup -->
		</header>
		<!--/ End Header -->

        <!-- Hero Slider -->
        <div id="app">
            @yield('content')
        </div>
		<!-- Footer -->
		<footer class="footer" style="background-image:url('img/map.png')">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-12">
							<!-- Footer About -->
							<div class="single-widget footer-about widget">
								<div class="logo">
									<div class="img-logo">
										<a class="logo" href="index.html">
											<img class="img-responsive" src="{{ asset('img/logo_footer.png') }}" alt="logo">
										</a>
									</div>
								</div>
								<div class="footer-widget-about-description">
									<p>
                                        The sole mandate of the company is to provide custom Software and security measures to help in smooth running of any bussiness. We utilise cutting-edge technology, extensive knowledge and experience for you to avoid security breaches and interuptions that may cause you money or lead to any loss to the business.
                                    </p>
								</div>
								<div class="social">
									<!-- Social Icons -->
									<ul class="social-icons">
										<li><a class="facebook" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
										<li><a class="twitter" href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
										<li><a class="linkedin" href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
										<li><a class="pinterest" href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
										<li><a class="instagram" href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
									</ul>
								</div>
							</div>
							<!--/ End Footer About -->
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<!-- Footer Links -->
							<div class="single-widget f-link widget">
								<h3 class="widget-title">Company</h3>
								<ul>
									<li><a href="#">About Us</a></li>
									<li><a href="#">Our Services</a></li>
									<li><a href="#">Portfolio</a></li>
									<li><a href="#">Pricing Plan</a></li>
									<li><a href="#">Contact us</a></li>
								</ul>
							</div>
							<!--/ End Footer Links -->
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<!-- Footer Contact -->
							<div class="single-widget footer_contact widget">
								<h3 class="widget-title">Contact</h3>
								<p>Beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem</p>
								<ul class="address-widget-list">
									<li class="footer-mobile-number"><i class="fa fa-phone"></i>+(600) 125-4985-214</li>
									<li class="footer-mobile-number"><i class="fa fa-envelope"></i>info@yoursite.com</li>
									<li class="footer-mobile-number"><i class="fa fa-map-marker"></i>House Building Uttara</li>
								</ul>
							</div>
							<!--/ End Footer Contact -->
						</div>
					</div>
				</div>
			</div>
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="copyright-content">
								<!-- Copyright Text -->
								<p>© Copyright <a href="{{ url('/') }}">{{ config('app.name') }}</a>.  Developed By <a target="_blank" href="{{ url('') }}">{{ config('app.name') }}</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>

		<!-- Jquery JS -->
		<script src="{{ asset('js/jquery.min.js') }}"></script>
		<script src="{{ asset('js/jquery-migrate-3.0.0.js') }}"></script>
		<!-- Popper JS -->
		<script src="{{ asset('js/popper.min.js') }}"></script>
		<!-- Bootstrap JS -->
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<!-- Modernizr JS -->
		<script src="{{ asset('js/modernizr.min.js') }}"></script>
		<!-- ScrollUp JS -->
		<script src="{{ asset('js/scrollup.js') }}"></script>
		<!-- FacnyBox JS -->
		<script src="{{ asset('js/jquery-fancybox.min.js') }}"></script>
		<!-- Cube Portfolio JS -->
		<script src="{{ asset('js/cubeportfolio.min.js') }}"></script>
		<!-- Slick Nav JS -->
		<script src="{{ asset('js/slicknav.min.js') }}"></script>
		<!-- Slick Nav JS -->
		<script src="{{ asset('js/slicknav.min.js') }}"></script>
		<!-- Slick Slider JS -->
		<script src="{{ asset('js/owl-carousel.min.js') }}"></script>
		<!-- Easing JS -->
		<script src="{{ asset('js/easing.js') }}"></script>
		<!-- Magnipic Popup JS -->
		<script src="{{ asset('js/magnific-popup.min.js') }}"></script>
		<!-- Active JS -->
		<script src="{{ asset('js/active.js') }}"></script>
	</body>
</html>
