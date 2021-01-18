
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eshop - eCommerce</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/bootstrap.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/magnific-popup.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/font-awesome.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ url('/css/jquery.fancybox.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ url('/css/themify-icons.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/niceselect.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/animate.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/flex-slider.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/owl-carousel.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/slicknav.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('/css/reset.css') }}">
         <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ url('/css/responsive.css') }}">

</head>
<body class="js">


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

		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href="/home"><img src="{{asset('images/logo.png')}}" alt="logo"></a>
						</div>
						<!--/ End Logo -->
						<!-- Search Form -->
						<div class="search-top">
							<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
							<!-- Search Form -->
							<div class="search-top">
								<form class="search-form">
									<input type="text" placeholder="Search here..." name="search">
									<button value="search" type="submit"><i class="ti-search"></i></button>
								</form>
							</div>
							<!--/ End Search Form -->
						</div>
						<!--/ End Search Form -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-8 col-md-7 col-12">
						<div class="search-bar-top">
							<div class="search-bar">
								<select>
									<option selected="selected">All Category</option>
									<option>Kitchen</option>
									<option>Furniture</option>
									<option>Fashion</option>
									<option>Books</option>
									<option>cosmatics</option>
									<option>Electronics</option>
								</select>
								<form action="/search">
									<input name="term" placeholder="Search Products Here....." type="search">
									<button class="btnn"><i class="ti-search"></i></button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-12">
						<div class="right-bar">
							<!-- Search Form -->
                            @if(Session::has('user'))
							<div class="sinlge-bar">
								<a href="/profile" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
                            </div>



							<div class="sinlge-bar shopping">
								<a href="#" class="single-icon"><i class="ti-bag"></i> <span class="total-count">2</span></a>
								<!-- Shopping Item -->
								<div class="shopping-item">
									<div class="dropdown-cart-header">
										<span>2 Items</span>
										<a href="card.html">View Cart</a>
									</div>
									<ul class="shopping-list">
										<li>
											<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
											<a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
											<h4><a href="#">Woman Ring</a></h4>
											<p class="quantity">1x - <span class="amount">$99.00</span></p>
										</li>
										<li>
											<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
											<a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
											<h4><a href="#">Woman Necklace</a></h4>
											<p class="quantity">1x - <span class="amount">$35.00</span></p>
										</li>
									</ul>
									<div class="bottom">
										<div class="total">
											<span>Total</span>
											<span class="total-amount">$134.00</span>
										</div>
										<a href="/checkout" class="btn animate">Checkout</a>
									</div>
                                </div>

                                <!-- <div class="sinlge-bar">
								<a href="account.html" class="single-icon">logout</a>
                                </div> -->


								<!--/ End Shopping Item -->
                            </div>
                            @endif
                            @if(Session::has('user'))
                            <div class="sinlge-bar">
                          <a class="single-icon" href="/logout">Logout </a>
                            </div>
                            @else
                            <div class="sinlge-bar">
                          <a class="single-icon" href="/signin">signIn <i class="fas fa-sign-in-alt"></i> </a>
                            </div>
                            @endif

						</div>
					</div>
				</div>
			</div>
		</div>



<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-migrate-3.0.0.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/colors.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/slicknav.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/owl-carousel.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/magnific-popup.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/waypoints.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/finalcountdown.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/nicesellect.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/flex-slider.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/scrollup.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/onepage-nav.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/active.js') }}"></script>

<!-- <div class="sinlge-bar">
                            <ul class="navbar-nav mr-auto ">
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Dropdown
                              </a>
                             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                              <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                              </div>
                      </li>
                      </ul>
                      </div> -->
</body>
</html>
