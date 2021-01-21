<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Eshop - eCommerce</title>
	<link rel="icon" type="{{''}}" href="../imgs/favicon.png">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	 <link rel="stylesheet" type="text/css" href="{{ url('/css/skitter.css') }}">
	</head>

<body>
@include("user.layouts.firstnav")
<style>
    .hero-slider .single-slider {
	background-image: url('/images/category/top-view-shopping-cart-cropjpg.jpg');
	background-position:bottom;}
</style>
@include("user.layouts.secondnav")
    
	<div class="product-area section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>All Category</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="product-info">
						<div class="nav-main">
							<!-- Tab Nav -->
							<ul class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#man" role="tab">Electronics</a></li>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#women" role="tab">Books</a></li>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#kids" role="tab">Fashion</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#accessories" role="tab">Cosmatics</a></li>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#essential" role="tab">Furniture</a></li>
		
							</ul>
							<!--/ End Tab Nav -->
						</div>
						<div class="tab-content" id="myTabContent">
							<!-- Start Single Tab -->
							<div class="tab-pane fade show active" id="man" role="tabpanel">
								<div class="tab-single">
									<div class="row">
									@foreach($product as $pro)
									@if($pro->category === "Electronics")
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product_single.html">
														<img class="default-img" src="{{ asset('product_images/' . $pro->image)}}" alt="#">
														<!-- <img class="hover-img" src="../imgs/category/p2.jpg" alt="#"> -->
													</a>
													<div class="button-head">
														<div class="product-action">
															<form action="electronicesfav" method="POST">
														        @csrf
														       <input type="hidden" name="product_id" value ="{{$pro['id']}}">
															   <a data-toggle="modal" data-target="#exampleModal" title="Quick View" ><span ><a href="{{url('/details' ,$pro->id)}}">Quick Shop</a></span></a>
														     	<button><i class=" ti-heart "></i></button>
														     	<input type="hidden" name="quantity" value ="{{$pro['quantity']}}">
														 </form>
															<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
														</div>
														<div class="product-action-2">
														<form action="electronicescart" method="POST">
														@csrf
														<input type="hidden" name="product_id" value ="{{$pro['id']}}">
															<button class="made">Add to cart</button>
															<input type="hidden" name="quantity" value ="{{$pro['quantity']}}">
														</form>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="{{url('/details' ,$pro->id)}}">{{$pro['name']}}</a></h3>
													<div class="product-price">
														<span>{{$pro['price']}}$</span>
													</div>
												</div>
											</div>
										</div>
										@endif
										@endforeach

										</div>
                                    </div>
							       </div>
							<!--/ End Single Tab -->



							<!-- Start Single Tab -->
							<div class="tab-pane fade" id="women" role="tabpanel">
								<div class="tab-single">
									<div class="row">
									@foreach($product as $pro)
									@if($pro->category === "Books")
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product_single.html">
														<img class="default-img" src="{{ asset('product_images/' . $pro->image)}}" alt="#">
														<!-- <img class="hover-img" src="../imgs/category/p2.jpg" alt="#"> -->
													</a>
													<div class="button-head">
														<div class="product-action">
															<form action="booksfav" method="POST">
														        @csrf
														       <input type="hidden" name="product_id" value ="{{$pro['id']}}">
															   <a data-toggle="modal" data-target="#exampleModal" title="Quick View" ><span ><a href="{{url('/details' ,$pro->id)}}">Quick Shop</a></span></a>
														     	<button><i class=" ti-heart "></i></button>
														     	<input type="hidden" name="quantity" value ="{{$pro['quantity']}}">
														 </form>
															<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
														</div>
														<div class="product-action-2">
														<form action="bookscart" method="POST">
														@csrf
														<input type="hidden" name="product_id" value ="{{$pro['id']}}">
															<button class="made">Add to cart</button>
															<input type="hidden" name="quantity" value ="{{$pro['quantity']}}">
														</form>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="{{url('/details' ,$pro->id)}}">{{$pro['name']}}</a></h3>
													<div class="product-price">
														<span>{{$pro['price']}}$</span>
													</div>
												</div>
											</div>
										</div>
										@endif
										@endforeach
										
	                       			</div>
								</div>
							</div>
							<!--/ End Single Tab -->
							<!-- Start Single Tab -->
							<div class="tab-pane fade" id="kids" role="tabpanel">
								<div class="tab-single">
									<div class="row">
									@foreach($product as $pro)
									@if($pro->category === "fashion")
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product_single.html">
														<img class="default-img" src="{{ asset('product_images/' . $pro->image)}}" alt="#">
														<!-- <img class="hover-img" src="../imgs/category/p2.jpg" alt="#"> -->
													</a>
													<div class="button-head">
														<div class="product-action">
															<form action="fashionfav" method="POST">
														        @csrf
														       <input type="hidden" name="product_id" value ="{{$pro['id']}}">
															   <a data-toggle="modal" data-target="#exampleModal" title="Quick View" ><span ><a href="{{url('/details' ,$pro->id)}}">Quick Shop</a></span></a>
														     	<button><i class=" ti-heart "></i></button>
														     	<input type="hidden" name="quantity" value ="{{$pro['quantity']}}">
														 </form>
															<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
														</div>
														<div class="product-action-2">
														<form action="fashioncart" method="POST">
														@csrf
														<input type="hidden" name="product_id" value ="{{$pro['id']}}">
															<button class="made">Add to cart</button>
															<input type="hidden" name="quantity" value ="{{$pro['quantity']}}">
														</form>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="{{url('/details' ,$pro->id)}}">{{$pro['name']}}</a></h3>
													<div class="product-price">
														<span>{{$pro['price']}}$</span>
													</div>
												</div>
											</div>
										</div>
										@endif
										@endforeach					
			             			</div>
								</div>
							</div>
							<!--/ End Single Tab -->
							<div class="tab-pane fade" id="accessories" role="tabpanel">
									<div class="tab-single">
										<div class="row">
										@foreach($product as $pro)
									@if($pro->category === "cosmetics")
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product_single.html">
														<img class="default-img" src="{{ asset('product_images/' . $pro->image)}}" alt="#">
														<!-- <img class="hover-img" src="../imgs/category/p2.jpg" alt="#"> -->
													</a>
													<div class="button-head">
														<div class="product-action">
															<form action="cosmaticsfav" method="POST">
														        @csrf
														       <input type="hidden" name="product_id" value ="{{$pro['id']}}">
															   <a data-toggle="modal" data-target="#exampleModal" title="Quick View" ><span ><a href="{{url('/details' ,$pro->id)}}">Quick Shop</a></span></a>
														     	<button><i class=" ti-heart "></i></button>
														     	<input type="hidden" name="quantity" value ="{{$pro['quantity']}}">
														 </form>
															<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
														</div>
														<div class="product-action-2">
														<form action="cosmaticscart" method="POST">
														@csrf
														<input type="hidden" name="product_id" value ="{{$pro['id']}}">
															<button class="made">Add to cart</button>
															<input type="hidden" name="quantity" value ="{{$pro['quantity']}}">
														</form>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="{{url('/details' ,$pro->id)}}">{{$pro['name']}}</a></h3>
													<div class="product-price">
														<span>{{$pro['price']}}$</span>
													</div>
												</div>
											</div>
										</div>
										@endif
										@endforeach										
		                    			</div>
									</div>
								</div>
								<!--/ End Single Tab -->
                       	<!-- Start Single Tab -->

										<div class="tab-pane fade" id="essential" role="tabpanel">
											<div class="tab-single">
												<div class="row">
												@foreach($product as $pro)
									@if($pro->category === "Furniture")
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product_single.html">
														<img class="default-img" src="{{ asset('product_images/' . $pro->image)}}" alt="#">
														<!-- <img class="hover-img" src="../imgs/category/p2.jpg" alt="#"> -->
													</a>
													<div class="button-head">
														<div class="product-action">
															<form action="furniturefav" method="POST">
														        @csrf
														       <input type="hidden" name="product_id" value ="{{$pro['id']}}">
															   <a data-toggle="modal" data-target="#exampleModal" title="Quick View" ><span ><a href="{{url('/details' ,$pro->id)}}">Quick Shop</a></span></a>
														     	<button><i class=" ti-heart "></i></button>
														     	<input type="hidden" name="quantity" value ="{{$pro['quantity']}}">
														 </form>
															<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
														</div>
														<div class="product-action-2">
														<form action="furniturecart" method="POST">
														@csrf
														<input type="hidden" name="product_id" value ="{{$pro['id']}}">
															<button class="made">Add to cart</button>
															<input type="hidden" name="quantity" value ="{{$pro['quantity']}}">
														</form>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="{{url('/details' ,$pro->id)}}">{{$pro['name']}}</a></h3>
													<div class="product-price">
														<span>{{$pro['price']}}$</span>
													</div>
												</div>
											</div>
										</div>
										@endif
										@endforeach	
												</div>
											</div>
										</div>
										<!--/ End Single Tab -->
</div>
						
					</div>
				</div>
			</div>
		</div>
</div>
<!-- End Product Area -->
<!-------------------for plugin slider--------->
<div class="container py-5 ">
	
<div class="skitter skitter-large m-auto">
	<ul>
		<li>
			 <a href="#cut"><img src="{{asset('images/obi-onyeador-2JrpkyZ2ruQ-unsplash.jpg')}}" class="cut"></a>
			<div class="label_text"><p>Lorem ipsum dolor sit amet consectetur adipisicing.</p></div>
		</li>
		<li>
			<a href="#cut"><img src="{{asset('images/naomi-hebert-MP0bgaS_d1c-unsplash.jpg')}}" class="cut"></a>
			<div class="label_text"><p>Lorem, ipsum dolor.</p></div>
		</li>
		<li> 
			<a href="#cut"><img src="{{asset('images/christopher-gower-_aXa21cf7rY-unsplash.jpg')}}" class="cut"></a>
			<div class="label_text"><p>Lorem ipsum dolor sit amet.</p></div>
		</li>
		<li> 
			<a href="#cut"><img src="{{asset('images/category/slider3.jpg')}}" class="cut"></a>
			<div class="label_text"><p>Lorem ipsum dolor sit amet.</p></div>
		</li>
	</ul>

</div>
</div>


<!----------------------------------------------------->

<!-- Start Midium Banner  -->
<section class="midium-banner my-5">
	<div class="container">
		<div class="row">
			<!-- Single Banner  -->
			<div class="col-lg-6 col-md-6 col-12">
				<div class="single-banner">
					<img src="{{asset('images/category/ORH93N0.jpg')}}" alt="#">
					<div class="content">
						<p>Electronics</p>
						<h3>Laptop"items<br>Up to<span> 50%</span></h3>
						<a href="#">Shop Now</a>
					</div>
				</div>
			</div>
			<!-- /End Single Banner  -->
			<!-- Single Banner  -->
			<div class="col-lg-6 col-md-6 col-12">
				<div class="single-banner">
					<img src="{{asset('images/category/couple-winter-cloths-studio.jpg')}}" alt="#">
					<div class="content">
						<p>Fashion</p>
						<h3 style="color:white">mid season <br> up to <span >70%</span></h3>
						<a href="#" class="btn">Shop Now</a>
					</div>
				</div>
			</div>
			<!-- /End Single Banner  -->
		</div>
	</div>
</section>
<!-- End Midium Banner -->
<!-- Start Most Popular -->
<div class="product-area most-popular section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h2>Products</h2>
				</div>
			</div>
		</div>
		<div class="row">
	
			<div class="col-12">
				<div class="owl-carousel popular-slider">
				@foreach($allproducts as $pro)
                
					<!-- Start Single Product -->
					<div class="single-product">
						<div class="product-img">
							<a href="{{url('/details' ,$pro->id)}}">
								<img class="default-img" src="{{ asset('product_images/' . $pro->image)}}" alt="#">
								<!-- <img class="hover-img" src="{{asset('images/category/subbanner2.jpg')}}" alt="#"> -->
							</a>
							<div class="button-head">
								<div class="product-action">
								<!-- <form action="cosmaticsfav" method="POST">
														        @csrf
														       <input type="hidden" name="product_id" value ="{{$pro['id']}}">
															   <a data-toggle="modal" data-target="#exampleModal" title="Quick View" ><span ><a href="{{url('/details' ,$pro->id)}}">Quick Shop</a></span></a>
														     	<button><i class=" ti-heart "></i></button>
														     	<input type="hidden" name="quantity" value ="{{$pro['quantity']}}">
														 </form> -->
								
								</div>
								<div class="product-action-2">
								<!-- <form action="cosmaticscart" method="POST">
										@csrf
										<input type="hidden" name="product_id" value ="{{$pro['id']}}">
										<button class="made">Add to cart</button>
											<input type="hidden" name="quantity" value ="{{$pro['quantity']}}">
										</form> -->
								</div>
							</div>
						</div>
						<div class="product-content">
						<h3><a href="{{url('/details' ,$pro->id)}}">{{$pro['name']}}</a></h3>
				<div class="product-price">
						<span>{{$pro['price']}}$</span>
							</div>
						</div>
					</div>
					
					@endforeach
			
							</div>
						</div>
					</div> 
					<!-- End Single Product -->
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Most Popular Area -->
	<!-- Start Cowndown Area -->
	<section class="cown-down">
		<div class="section-inner ">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-12 padding-right">
						<div class="image">
							<img src="{{asset('images/category/3072209.jpg')}}" alt="#">
						</div>	
					</div>	
					<div class="col-lg-6 col-12 padding-left">
						<div class="content">
							<div class="heading-block">
								<p class="small-title">Deal of day</p>
								<h3 class="title">special offer on mobile</h3>
								<p class="text">Suspendisse massa leo, vestibulum cursus nulla sit amet, frungilla placerat lorem. Cars fermentum, sapien. </p>
								<h1 class="price">$1200 <s>$1890</s></h1>
								<div class="coming-time">
									<div class="clearfix" data-countdown="2021/02/30"></div>
								</div>
							</div>
						</div>	
					</div>	
				</div>
			</div>
		</div>
	</section>
	<!-- /End Cowndown Area -->
	<!-- Start Shop Services Area -->
	<section class="shop-services section home mb-3">
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
    <!-- End Shop Services Area -->
@include("user.layouts.footer")

<script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.skitter.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/homecategory.js') }}"></script>
</body>
</html>