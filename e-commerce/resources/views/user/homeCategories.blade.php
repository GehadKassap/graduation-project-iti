@include("user.layouts.firstnav")

<style>
    .hero-slider .single-slider {
	background-image: url('{{asset('images/category/top-view-shopping-cart-cropjpg.jpg')}}');
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
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product_single.html">
														<img class="default-img" src="{{asset('images/category/iPhone6-02.jpg')}}" alt="#">
														<img class="hover-img" src="{{asset('images/category/3072209.jpg')}}" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
															<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product_single.html">for men</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product_single.html">
                                                    <img class="default-img" src="{{asset('images/category/iPhone6-02.jpg')}}" alt="#">
														<img class="hover-img" src="{{asset('images/category/3072209.jpg')}}" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
															<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product_single.html">for men</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product_single.html">
                                                    <img class="default-img" src="{{asset('images/category/iPhone6-02.jpg')}}" alt="#">
														<img class="hover-img" src="{{asset('images/category/3072209.jpg')}}" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
															<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product_single.html">for men</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product_single.html">
                                                    <img class="default-img" src="{{asset('images/category/iPhone6-02.jpg')}}" alt="#">
														<img class="hover-img" src="{{asset('images/category/3072209.jpg')}}" alt="#">
														<span class="new">New</span>
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
															<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product_single.html">for men</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product_single.html">
                                                    <img class="default-img" src="{{asset('images/category/iPhone6-02.jpg')}}" alt="#">
														<img class="hover-img" src="{{asset('images/category/3072209.jpg')}}" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
															<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product_single.html">for men</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product_single.html">
													<img class="default-img" src="{{asset('images/category/iPhone6-02.jpg')}}" alt="#">
														<img class="hover-img" src="{{asset('images/category/3072209.jpg')}}" alt="#">
														<span class="price-dec">30% Off</span>
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
															<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product_single.html">for men</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product_single.html">
                                                    <img class="default-img" src="{{asset('images/category/iPhone6-02.jpg')}}" alt="#">
														<img class="hover-img" src="{{asset('images/category/3072209.jpg')}}" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
															<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">for men</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
                                                    <img class="default-img" src="{{asset('images/category/iPhone6-02.jpg')}}" alt="#">
														<img class="hover-img" src="{{asset('images/category/3072209.jpg')}}" alt="#">
														<span class="out-of-stock">Hot</span>
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
															<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">for men</a></h3>
													<div class="product-price">
														<span class="old">$60.00</span>
														<span>$50.00</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--/ End Single Tab -->
							<!-- Start Single Tab -->
							<div class="tab-pane fade" id="women" role="tabpanel">
								<div class="tab-single">
									<div class="row">
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="../imgs/category/457.jpg" alt="#">
														<img class="hover-img" src="../imgs/category/19021605.jpg" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
															<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Women Hot Collection</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product_single.html">
														<img class="default-img" src="../imgs/category/457.jpg" alt="#">
														<img class="hover-img" src="../imgs/category/19021605.jpg" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
															<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Awesome Pink Show</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="../imgs/category/19021605.jpg" alt="#">
														<img class="hover-img" src="../imgs/category/457.jpg" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
															<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product_single.html">
														<img class="default-img" src="../imgs/category/19021605.jpg" alt="#">
														<img class="hover-img" src="../imgs/category/457.jpg" alt="#">
														<span class="new">New</span>
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
															<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product_single.html">Women Pant Collectons</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product_single.html">
														<img class="default-img" src="../imgs/category/19021605.jpg" alt="#">
														<img class="hover-img" src="../imgs/category/457.jpg" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
															<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product_single.html">Awesome Bags Collection</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product_single.html">
														<img class="default-img" src="../imgs/category/19021605.jpg" alt="#">
														<img class="hover-img" src="../imgs/category/457.jpg" alt="#">
														<span class="price-dec">30% Off</span>
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
															<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Awesome Cap For Women</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="../imgs/category/19021605.jpg" alt="#">
														<img class="hover-img" src="../imgs/category/457.jpg" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
															<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Polo Dress For Women</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="../imgs/category/457.jpg" alt="#">
														<img class="hover-img" src="../imgs/category/19021605.jpg" alt="#">
														<span class="out-of-stock">Hot</span>
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
															<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Black Sunglass For Women</a></h3>
													<div class="product-price">
														<span class="old">$60.00</span>
														<span>$50.00</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--/ End Single Tab -->
							<!-- Start Single Tab -->
							<div class="tab-pane fade" id="kids" role="tabpanel">
								<div class="tab-single">
									<div class="row">
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="../imgs/category/littleGirl.jpg" alt="#">
														<img class="hover-img" src="../imgs/category/backLittleGilr.jpg" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
															<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Women Hot Collection</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="../imgs/category/portrait-handsome-smiling-stylish-hipster-lumbersexual-businessman-model-man-dressed-jeans-jacket-clothes.jpg" alt="#">
														<img class="hover-img" src="../imgs/category/p2.jpg" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
															<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Awesome Pink Show</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="../imgs/category/full.jpg" alt="#">
														<img class="hover-img" src="../imgs/category/bliss.jpg" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
															<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="../imgs/category/littleBoy.jpg" alt="#">
														<img class="hover-img" src="../imgs/category/backlittleBoy.jpg" alt="#">
														<span class="new">New</span>
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
															<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Women Pant Collectons</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="../imgs/category/portrait-handsome-smiling-stylish-hipster-lumbersexual-businessman-model-man-dressed-jeans-jacket-clothes.jpg" alt="#">
														<img class="hover-img" src="../imgs/category/p2.jpg" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
															<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="../imgs/category/full.jpg" alt="#">
														<img class="hover-img" src="../imgs/category/bliss.jpg" alt="#">
														<span class="price-dec">30% Off</span>
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
															<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Awesome Cap For Women</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="../imgs/category/littleGirl.jpg" alt="#">
														<img class="hover-img" src="../imgs/category/backLittleGilr.jpg" alt="#">
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
															<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Polo Dress For Women</a></h3>
													<div class="product-price">
														<span>$29.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xl-3 col-lg-4 col-md-4 col-12">
											<div class="single-product">
												<div class="product-img">
													<a href="product-details.html">
														<img class="default-img" src="../imgs/category/full.jpg" alt="#">
														<img class="hover-img" src="../imgs/category/bliss.jpg" alt="#">
														<span class="out-of-stock">Hot</span>
													</a>
													<div class="button-head">
														<div class="product-action">
															<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
															<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
															<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
														</div>
														<div class="product-action-2">
															<a title="Add to cart" href="#">Add to cart</a>
														</div>
													</div>
												</div>
												<div class="product-content">
													<h3><a href="product-details.html">Black Sunglass For Women</a></h3>
													<div class="product-price">
														<span class="old">$60.00</span>
														<span>$50.00</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--/ End Single Tab -->
							<div class="tab-pane fade" id="accessories" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="../imgs/category/16238.jpg" alt="#">
															<img class="hover-img" src="../imgs/category/55.jpg" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
															</div>
															<div class="product-action-2">
																<a title="Add to cart" href="#">Add to cart</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Women Hot Collection</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="../imgs/category/16238.jpg" alt="#">
															<img class="hover-img" src="../imgs/category/55.jpg" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
															</div>
															<div class="product-action-2">
																<a title="Add to cart" href="#">Add to cart</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Awesome Pink Show</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="../imgs/category/16238.jpg" alt="#">
															<img class="hover-img" src="../imgs/category/55.jpg" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
															</div>
															<div class="product-action-2">
																<a title="Add to cart" href="#">Add to cart</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="../imgs/category/16238.jpg" alt="#">
															<img class="hover-img" src="../imgs/category/55.jpg" alt="#">
															<span class="new">New</span>
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
															</div>
															<div class="product-action-2">
																<a title="Add to cart" href="#">Add to cart</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Women Pant Collectons</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="../imgs/category/16238.jpg" alt="#">
															<img class="hover-img" src="../imgs/category/55.jpg" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
															</div>
															<div class="product-action-2">
																<a title="Add to cart" href="#">Add to cart</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="../imgs/category/16238.jpg" alt="#">
															<img class="hover-img" src="../imgs/category/55.jpg" alt="#">
															<span class="price-dec">30% Off</span>
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
															</div>
															<div class="product-action-2">
																<a title="Add to cart" href="#">Add to cart</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Awesome Cap For Women</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="../imgs/category/16238.jpg" alt="#">
															<img class="hover-img" src="../imgs/category/55.jpg" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
															</div>
															<div class="product-action-2">
																<a title="Add to cart" href="#">Add to cart</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Polo Dress For Women</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="../imgs/category/16238.jpg" alt="#">
															<img class="hover-img" src="../imgs/category/55.jpg" alt="#">
															<span class="out-of-stock">Hot</span>
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
															</div>
															<div class="product-action-2">
																<a title="Add to cart" href="#">Add to cart</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Black Sunglass For Women</a></h3>
														<div class="product-price">
															<span class="old">$60.00</span>
															<span>$50.00</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
								<!-- Start Single Tab -->
								<div class="tab-pane fade" id="accessories" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
															</div>
															<div class="product-action-2">
																<a title="Add to cart" href="#">Add to cart</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Women Hot Collection</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
															</div>
															<div class="product-action-2">
																<a title="Add to cart" href="#">Add to cart</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Awesome Pink Show</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
															</div>
															<div class="product-action-2">
																<a title="Add to cart" href="#">Add to cart</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
															<span class="new">New</span>
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
															</div>
															<div class="product-action-2">
																<a title="Add to cart" href="#">Add to cart</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Women Pant Collectons</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
															</div>
															<div class="product-action-2">
																<a title="Add to cart" href="#">Add to cart</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
															<span class="price-dec">30% Off</span>
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
															</div>
															<div class="product-action-2">
																<a title="Add to cart" href="#">Add to cart</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Awesome Cap For Women</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
															</div>
															<div class="product-action-2">
																<a title="Add to cart" href="#">Add to cart</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Polo Dress For Women</a></h3>
														<div class="product-price">
															<span>$29.00</span>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
															<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
															<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
															<span class="out-of-stock">Hot</span>
														</a>
														<div class="button-head">
															<div class="product-action">
																<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
															</div>
															<div class="product-action-2">
																<a title="Add to cart" href="#">Add to cart</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">Black Sunglass For Women</a></h3>
														<div class="product-price">
															<span class="old">$60.00</span>
															<span>$50.00</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
			<!-- Start Single Tab -->
			<div class="tab-pane fade" id="accessories" role="tabpanel">
				<div class="tab-single">
					<div class="row">
						<div class="col-xl-3 col-lg-4 col-md-4 col-12">
							<div class="single-product">
								<div class="product-img">
									<a href="product-details.html">
										<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
										<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
									</a>
									<div class="button-head">
										<div class="product-action">
											<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
											<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
											<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
										</div>
										<div class="product-action-2">
											<a title="Add to cart" href="#">Add to cart</a>
										</div>
									</div>
								</div>
								<div class="product-content">
									<h3><a href="product-details.html">Women Hot Collection</a></h3>
									<div class="product-price">
										<span>$29.00</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-4 col-12">
							<div class="single-product">
								<div class="product-img">
									<a href="product-details.html">
										<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
										<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
									</a>
									<div class="button-head">
										<div class="product-action">
											<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
											<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
											<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
										</div>
										<div class="product-action-2">
											<a title="Add to cart" href="#">Add to cart</a>
										</div>
									</div>
								</div>
								<div class="product-content">
									<h3><a href="product-details.html">Awesome Pink Show</a></h3>
									<div class="product-price">
										<span>$29.00</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-4 col-12">
							<div class="single-product">
								<div class="product-img">
									<a href="product-details.html">
										<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
										<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
									</a>
									<div class="button-head">
										<div class="product-action">
											<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
											<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
											<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
										</div>
										<div class="product-action-2">
											<a title="Add to cart" href="#">Add to cart</a>
										</div>
									</div>
								</div>
								<div class="product-content">
									<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
									<div class="product-price">
										<span>$29.00</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-4 col-12">
							<div class="single-product">
								<div class="product-img">
									<a href="product-details.html">
										<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
										<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
										<span class="new">New</span>
									</a>
									<div class="button-head">
										<div class="product-action">
											<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
											<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
											<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
										</div>
										<div class="product-action-2">
											<a title="Add to cart" href="#">Add to cart</a>
										</div>
									</div>
								</div>
								<div class="product-content">
									<h3><a href="product-details.html">Women Pant Collectons</a></h3>
									<div class="product-price">
										<span>$29.00</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-4 col-12">
							<div class="single-product">
								<div class="product-img">
									<a href="product-details.html">
										<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
										<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
									</a>
									<div class="button-head">
										<div class="product-action">
											<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
											<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
											<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
										</div>
										<div class="product-action-2">
											<a title="Add to cart" href="#">Add to cart</a>
										</div>
									</div>
								</div>
								<div class="product-content">
									<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
									<div class="product-price">
										<span>$29.00</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-4 col-12">
							<div class="single-product">
								<div class="product-img">
									<a href="product-details.html">
										<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
										<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
										<span class="price-dec">30% Off</span>
									</a>
									<div class="button-head">
										<div class="product-action">
											<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
											<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
											<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
										</div>
										<div class="product-action-2">
											<a title="Add to cart" href="#">Add to cart</a>
										</div>
									</div>
								</div>
								<div class="product-content">
									<h3><a href="product-details.html">Awesome Cap For Women</a></h3>
									<div class="product-price">
										<span>$29.00</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-4 col-12">
							<div class="single-product">
								<div class="product-img">
									<a href="product-details.html">
										<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
										<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
									</a>
									<div class="button-head">
										<div class="product-action">
											<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
											<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
											<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
										</div>
										<div class="product-action-2">
											<a title="Add to cart" href="#">Add to cart</a>
										</div>
									</div>
								</div>
								<div class="product-content">
									<h3><a href="product-details.html">Polo Dress For Women</a></h3>
									<div class="product-price">
										<span>$29.00</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-4 col-md-4 col-12">
							<div class="single-product">
								<div class="product-img">
									<a href="product-details.html">
										<img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
										<img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
										<span class="out-of-stock">Hot</span>
									</a>
									<div class="button-head">
										<div class="product-action">
											<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
											<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
											<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
										</div>
										<div class="product-action-2">
											<a title="Add to cart" href="#">Add to cart</a>
										</div>
									</div>
								</div>
								<div class="product-content">
									<h3><a href="product-details.html">Black Sunglass For Women</a></h3>
									<div class="product-price">
										<span class="old">$60.00</span>
										<span>$50.00</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Single Tab -->
										<!-- Start Single Tab -->
										<div class="tab-pane fade" id="essential" role="tabpanel">
											<div class="tab-single">
												<div class="row">
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="product-details.html">
																	<img class="default-img" src="../imgs/category/subbanner1.jpg" alt="#">
																	<img class="hover-img" src="../imgs/category/subbanner2.jpg" alt="#">
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																		<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																		<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Add to cart</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="product-details.html">Women Hot Collection</a></h3>
																<div class="product-price">
																	<span>$29.00</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="product-details.html">
																	<img class="default-img" src="../imgs/category/subbanner1.jpg" alt="#">
																	<img class="hover-img" src="../imgs/category/subbanner2.jpg" alt="#">
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																		<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																		<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Add to cart</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="product-details.html">Awesome Pink Show</a></h3>
																<div class="product-price">
																	<span>$29.00</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="product-details.html">
																	<img class="default-img" src="../imgs/category/subbanner1.jpg" alt="#">
																	<img class="hover-img" src="../imgs/category/subbanner2.jpg" alt="#">
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																		<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																		<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Add to cart</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
																<div class="product-price">
																	<span>$29.00</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="product-details.html">
																	<img class="default-img" src="../imgs/category/subbanner1.jpg" alt="#">
																	<img class="hover-img" src="../imgs/category/subbanner2.jpg" alt="#">
																	<span class="new">New</span>
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																		<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																		<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Add to cart</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="product-details.html">Women Pant Collectons</a></h3>
																<div class="product-price">
																	<span>$29.00</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="product-details.html">
																	<img class="default-img" src="../imgs/category/subbanner1.jpg" alt="#">
																	<img class="hover-img" src="../imgs/category/subbanner2.jpg" alt="#">
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																		<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																		<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Add to cart</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
																<div class="product-price">
																	<span>$29.00</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="product-details.html">
																	<img class="default-img" src="../imgs/category/subbanner1.jpg" alt="#">
																	<img class="hover-img" src="../imgs/category/subbanner2.jpg" alt="#">
																	<span class="price-dec">30% Off</span>
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																		<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																		<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Add to cart</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="product-details.html">Awesome Cap For Women</a></h3>
																<div class="product-price">
																	<span>$29.00</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="product-details.html">
																	<img class="default-img" src="../imgs/category/subbanner1.jpg" alt="#">
																	<img class="hover-img" src="../imgs/category/subbanner2.jpg" alt="#">
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																		<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																		<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Add to cart</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="product-details.html">Polo Dress For Women</a></h3>
																<div class="product-price">
																	<span>$29.00</span>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-3 col-lg-4 col-md-4 col-12">
														<div class="single-product">
															<div class="product-img">
																<a href="product-details.html">
																	<img class="default-img" src="../imgs/category/subbanner1.jpg" alt="#">
																	<img class="hover-img" src="../imgs/category/subbanner2.jpg" alt="#">
																	<span class="out-of-stock">Hot</span>
																</a>
																<div class="button-head">
																	<div class="product-action">
																		<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																		<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																		<a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a>
																	</div>
																	<div class="product-action-2">
																		<a title="Add to cart" href="#">Add to cart</a>
																	</div>
																</div>
															</div>
															<div class="product-content">
																<h3><a href="product-details.html">Black Sunglass For Women</a></h3>
																<div class="product-price">
																	<span class="old">$60.00</span>
																	<span>$50.00</span>
																</div>
															</div>
														</div>
													</div>
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
			 <a href="#cut"><img src="../imgs/obi-onyeador-2JrpkyZ2ruQ-unsplash.jpg" class="cut"></a>
			<div class="label_text"><p>Lorem ipsum dolor sit amet consectetur adipisicing.</p></div>
		</li>
		<li>
			<a href="#cut"><img src="../imgs/naomi-hebert-MP0bgaS_d1c-unsplash.jpg" class="cut"></a>
			<div class="label_text"><p>Lorem, ipsum dolor.</p></div>
		</li>
		<li> 
			<a href="#cut"><img src="../imgs/christopher-gower-_aXa21cf7rY-unsplash.jpg" class="cut"></a>
			<div class="label_text"><p>Lorem ipsum dolor sit amet.</p></div>
		</li>
		<li> 
			<a href="#cut"><img src="../imgs/category/slider3.jpg" class="cut"></a>
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
					<img src="../imgs/category/ORH93N0.jpg" alt="#">
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
					<img src="../imgs/category/couple-winter-cloths-studio.jpg" alt="#">
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
					<h2>Best Seller</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="owl-carousel popular-slider">
					<!-- Start Single Product -->
					<div class="single-product">
						<div class="product-img">
							<a href="product-details.html">
								<img class="default-img" src="../imgs/category/iPhone6-02.jpg" alt="#">
								<img class="hover-img" src="../imgs/category//iPhone6-02.jpg" alt="#">
								<span class="out-of-stock">Hot</span>
							</a>
							<div class="button-head">
								<div class="product-action">
									<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
									<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
									<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
								</div>
								<div class="product-action-2">
									<a title="Add to cart" href="#">Add to cart</a>
								</div>
							</div>
						</div>
						<div class="product-content">
							<h3><a href="product-details.html">Black Sunglass For Women</a></h3>
							<div class="product-price">
								<span class="old">$60.00</span>
								<span>$50.00</span>
							</div>
						</div>
					</div>
					<!-- End Single Product -->
					<!-- Start Single Product -->
					<div class="single-product">
						<div class="product-img">
							<a href="product-details.html">
								<img class="default-img" src="../imgs/category/457.jpg" alt="#">
								<img class="hover-img" src="../imgs/category/457.jpg" alt="#">
							</a>
							<div class="button-head">
								<div class="product-action">
									<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
									<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
									<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
								</div>
								<div class="product-action-2">
									<a title="Add to cart" href="#">Add to cart</a>
								</div>
							</div>
						</div>
						<div class="product-content">
							<h3><a href="product-details.html">Women Hot Collection</a></h3>
							<div class="product-price">
								<span>$50.00</span>
							</div>
						</div>
					</div>
					<!-- End Single Product -->
					<!-- Start Single Product -->
					<div class="single-product">
						<div class="product-img">
							<a href="product-details.html">
								<img class="default-img" src="../imgs/category/19021605.jpg" alt="#">
								<img class="hover-img" src="../imgs/category/19021605.jpg" alt="#">
								<span class="new">New</span>
							</a>
							<div class="button-head">
								<div class="product-action">
									<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
									<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
									<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
								</div>
								<div class="product-action-2">
									<a title="Add to cart" href="#">Add to cart</a>
								</div>
							</div>
						</div>
						<div class="product-content">
							<h3><a href="product-details.html">Awesome Pink Show</a></h3>
							<div class="product-price">
								<span>$50.00</span>
							</div>
						</div>
					</div>
					<!-- End Single Product -->
					<!-- Start Single Product -->
					<div class="single-product">
						<div class="product-img">
							<a href="product-details.html">
								<img class="default-img" src="../imgs/category/subbanner1.jpg" alt="#">
								<img class="hover-img" src="../imgs/category/subbanner1.jpg" alt="#">
							</a>
							<div class="button-head">
								<div class="product-action">
									<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
									<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
									<!-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> -->
								</div>
								<div class="product-action-2">
									<a title="Add to cart" href="#">Add to cart</a>
								</div>
							</div>
						</div>
						<div class="product-content">
							<h3><a href="product-details.html">Awesome Bags Collection</a></h3>
							<div class="product-price">
								<span>$50.00</span>
							</div>
						</div>
					</div>
					<!-- End Single Product -->
				</div>
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
							<img src="../imgs/category/3072209.jpg" alt="#">
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
