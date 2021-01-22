<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheckOut</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<body>
@include("user.layouts.firstnav")
</header>
	<!-- Start Checkout -->
	<section class="shop checkout section">
		<div class="container">
			<div class="row"> 
				<div class="col-lg-8 col-12">
					<div class="checkout-form">
						<h2>Make Your Checkout Here</h2>
						<br><br>
						<!-- Form -->
						<form class="form" method="POST" action="/success" id="needs-validation">
						       @csrf
							   <input type="hidden" name="id" placeholder=""  value="{{session('user.id')}}" >
							 <div class="row">
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<label>Full Name<span>*</span></label>
										<input type="text" name="fullname" placeholder=""  value="{{session('user.fullname')}}" id="validationCustom01" required>
										<div class="invalid-feedback">
                                        Please Enter Your Name.
                                        </div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group">
										<label>Email Address<span>*</span></label>
										<input type="email" name="email" placeholder=""  value="{{session('user.email')}}" id="validationCustom02" required>
										<div class="invalid-feedback">
                                          Please Enter Your email.
                                         </div>
									</div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12">
									<div class="form-group">
										<label>Address<span>*</span></label>
										<textarea type="text" name="address" placeholder="" id="validationCustom04" required></textarea>
										<div class="invalid-feedback">
                                         Please provide address.
                                          </div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="form-group mr-5">
										<label>Phone Number<span>*</span></label>
										<input type="number" name="phone" placeholder="" id="validationCustom05"  required>
										<div class="invalid-feedback">
                                         Please Enter Your phone.
                                        </div>
									</div>
								</div>
								
							
							
						
								<div class="button ml-5">
									<button type="submit" class="btn mt-4 mr-3">proceed to checkout</button>
								</div>
								<script>
                        (function () {
                            "use strict";
                            window.addEventListener("load", function () {
                                var form = document.getElementById("needs-validation");
                                form.addEventListener("submit", function (event) {
                                    if (form.checkValidity() == false) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                    }
                                    form.classList.add("was-validated");
                                    var editorElement = document.getElementById("productDetails");
                                    if (editorElement.value == '') {
                                        editorElement.parentNode.classList.add("is-invalid");
                                        editorElement.parentNode.classList.remove("is-valid");
                                    } else {
                                        editorElement.parentNode.classList.remove("is-invalid");
                                        editorElement.parentNode.classList.add("is-valid");
                                    }

                                }, false);
                            }, false);
                        }());
                    </script>
							</div>
						</form>
						<!--/ End Form -->
					</div>
                </div>
                @foreach($order as $ord)
				<div class="col-lg-4 col-12">
					<div class="order-details">
						<!-- Order Widget -->
						<div class="single-widget">
							<h2>CART  TOTALS</h2>
							<div class="content">
								<ul>
									<li>Sub Total<span>{{$ord['total']}}</span></li>
									<li>(+) Shipping<span>$10.00</span></li>
									<li class="last">Total<span>{{$ord['total+10']}}</span></li>
								</ul>
							</div>
						</div>
						<!--/ End Order Widget -->
				     @endforeach
					
						<!-- Button Widget -->
						<div class="single-widget get-button">
							<div class="content">
							
							</div>
						</div>
						<!--/ End Button Widget -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ End Checkout -->
	
	<!-- Start Shop Services Area  -->
	<section class="shop-services section home">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Free shiping</h4>
						<p>Orders over $100</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Free Return</h4>
						<p>Within 30 days returns</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Sucure Payment</h4>
						<p>100% secure payment</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Best Peice</h4>
						<p>Guaranteed price</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Services -->
	
	<!-- Start Shop Newsletter  -->
	<section class="shop-newsletter section">
		<div class="container">
			<div class="inner-top">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 col-12">
						<!-- Start Newsletter Inner -->
						<div class="inner">
							<h4>Newsletter</h4>
							<p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
							<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
								<input name="EMAIL" placeholder="Your email address" required="" type="email">
								<button class="btn">Subscribe</button>
							</form>
						</div>
						<!-- End Newsletter Inner -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Newsletter -->
	

	@include("user.layouts.footer")

<script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.skitter.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/homecategory.js') }}"></script> 
</body>
</html>