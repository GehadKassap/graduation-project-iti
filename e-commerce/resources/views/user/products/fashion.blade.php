
@include("user.layouts.firstnav")
@section('title')
fashion
@endsection
<style>
    .hero-slider .single-slider {
	background-image: url('/images/category/stunning-barefooted-woman-trendy-fur-coat-dancing-laughing-photoshoot.jpg');
	background-position:top;}
</style>
@include("user.layouts.secondnav")

<div class="product-area section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>All Item</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="product-info">
						<div class="nav-main">
							<!-- Tab Nav -->
							<ul class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#man" role="tab">Women</a></li>
								<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#women" role="tab">Men</a></li>



							</ul>
							<!--/ End Tab Nav -->
						</div>
						<div class="tab-content" id="myTabContent">
							<!-- Start Single Tab -->
							<div class="tab-pane fade show active" id="man" role="tabpanel">
								<div class="tab-single">
									<div class="row">
									@foreach($product as $pro)
									@if($pro->category === "fashion" && $pro->sub_category === "Women")
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="{{url('/details' ,[$pro->id , $pro->category])}}">
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
													<h3><a href="{{url('/details' ,[$pro->id , $pro->category])}}">{{$pro['name']}}</a></h3>
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
									@if($pro->category === "fashion" && $pro->sub_category === "Men")
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="{{url('/details' ,[$pro->id , $pro->category])}}">
														<img class="default-img" src="{{ asset('product_images/' . $pro->image)}}" alt="#">
														<!-- <img class="hover-img" src="../imgs/category/bliss.jpg" alt="#"> -->
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
                                         	<!-- </div>
											</div>
										</div>
									</div>
								</div>
							</div> -->
							<!--/ End Single Tab -->

					</div>
				</div>
			</div>
		</div>
</div>
</div>
<!-- End Product Area -->

<!-- Start Most Popular -->
<div class="product-area most-popular section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-title">
					<h2>Related Products</h2>
				</div>
			</div>
		</div>
		<div class="row">

			<div class="col-12">
				<div class="owl-carousel popular-slider">
				@foreach($product as $pro)
                 @if($pro->category === "fashion")
					<!-- Start Single Product -->
					<div class="single-product">
						<div class="product-img">
							<a href="{{url('/details' ,[$pro->id , $pro->category])}}">
								<img class="default-img" src="{{ asset('product_images/' . $pro->image)}}" alt="#">
								<!-- <img class="hover-img" src="{{asset('images/category/subbanner2.jpg')}}" alt="#"> -->
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

								</div>
								<div class="product-action-2">
								<form action="fashionecart" method="POST">
										@csrf
										<input type="hidden" name="product_id" value ="{{$pro['id']}}">
										<button class="made">Add to cart</button>
											<input type="hidden" name="quantity" value ="{{$pro['quantity']}}">
										</form>
								</div>
							</div>
						</div>
						<div class="product-content">
						<h3><a href="{{url('/details' ,[$pro->id , $pro->category])}}">{{$pro['name']}}</a></h3>
				<div class="product-price">
						<span>{{$pro['price']}}$</span>
							</div>
						</div>
					</div>
					@endif
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
							<img src="{{asset('images/category/portrait-young-beautiful-smiling-girl-trendy-summer-light-pink-dress-sexy-carefree-woman-posing-positive-model-having-fun-dancing-round-sunglasses.jpg')}}" alt="#">
						</div>
					</div>
					<div class="col-lg-6 col-12 padding-left">
						<div class="content">
							<div class="heading-block">
								<p class="small-title">Deal of day</p>
								<h3 class="title">Dress</h3>
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
<section class="shop-services section home my-3">
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
